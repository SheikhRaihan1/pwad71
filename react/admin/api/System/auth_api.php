<?php
class AuthApi extends Api {

    public function __construct() {
        parent::__construct();
    }

    /**
     * User Login
     * Authenticates credentials, generates a short-lived access token, 
     * and sets a secure HttpOnly refresh token cookie.
     */
    public function login($data) {
        global $db, $tx, $pdo; // $db for MySQLi query, $pdo for refresh token statements

        $username = trim($data["username"] ?? '');
        $password = trim($data["password"] ?? '');

        if (empty($username) || empty($password)) {
            http_response_code(400);
            echo json_encode(["success" => 0, "message" => "Username and password required"]);
            return;
        }

        // 1. Fetch user from DB
        $stmt = $db->query("SELECT u.id, u.name, u.full_name, u.password, u.email, u.photo, u.mobile, u.role_id, r.name as role 
                            FROM {$tx}users u 
                            JOIN {$tx}roles r ON r.id = u.role_id 
                            WHERE u.name = '{$db->real_escape_string($username)}' AND u.inactive = 0");
                            
        $user = $stmt ? $stmt->fetch_object() : null;

        // 2. Validate password
        if (!$user || !password_verify($password, $user->password)) {
            http_response_code(401);
            echo json_encode(["success" => 0, "message" => "Invalid credentials"]);
            return;
        }

        // 3. Issue Access & Refresh Tokens
        $jwt = new JWT();
        $accessToken = $jwt->generateAccessToken([
            "id"      => $user->id,
            "name"    => $user->name,
            "role_id" => $user->role_id,
            "email"   => $user->email,
            "ip"      => get_ip(),
            "iss"     => "jwt.server",
            "aud"     => "intelsofts.com"
        ]);

        $refreshToken = $jwt->generateRefreshToken();
        $expiresAt = date('Y-m-d H:i:s', strtotime('+30 days'));

        // Save refresh token to database via PDO
        $tokenStmt = $db->prepare("INSERT INTO refresh_tokens (user_id, token, expires_at) VALUES (?, ?, ?)");
        $tokenStmt->execute([$user->id, $refreshToken, $expiresAt]);

        // Set secure HttpOnly cookie for the refresh token
        $this->setRefreshTokenCookie($refreshToken, time() + (86400 * 30));

        // 4. Return Access Token & User Data
        http_response_code(200);
        echo json_encode([
            "success"      => 1,
            "access_token" => $accessToken,
            "user"         => [
                "id"    => $user->id,
                "name"  => $user->name,
                "email" => $user->email,
                "role"  => $user->role
            ]
        ]);
    }

    /**
     * Endpoint to exchange a valid Refresh Token for a new Access Token
     */
    public function refresh() {
        global $db;

        $refreshToken = $_COOKIE['refresh_token'] ?? null;

        if (!$refreshToken) {
            http_response_code(401);
            echo json_encode(["success" => 0, "message" => "Refresh token missing"]);
            return;
        }

        // 1. Verify token in DB
        $stmt = $db->prepare("SELECT user_id, expires_at FROM refresh_tokens WHERE token = ?");
        $stmt->execute([$refreshToken]);
        $tokenData = $stmt->get_result()->fetch_assoc();

        if (!$tokenData || strtotime($tokenData['expires_at']) < time()) {
            http_response_code(403);
            echo json_encode(["success" => 0, "message" => "Invalid or expired refresh token"]);
            return;
        }

        // 2. Rotate Refresh Token (Delete old, create new)
        $deleteStmt = $db->prepare("DELETE FROM refresh_tokens WHERE token = ?");
        $deleteStmt->execute([$refreshToken]);

        $jwt = new JWT();
        $newRefreshToken = $jwt->generateRefreshToken();
        $newExpiresAt = date('Y-m-d H:i:s', strtotime('+30 days'));

        $insertStmt = $db->prepare("INSERT INTO refresh_tokens (user_id, token, expires_at) VALUES (?, ?, ?)");
        $insertStmt->execute([$tokenData['user_id'], $newRefreshToken, $newExpiresAt]);

        $this->setRefreshTokenCookie($newRefreshToken, time() + (86400 * 30));

        // 3. Issue new Access Token
        $newAccessToken = $jwt->generateAccessToken(['user_id' => $tokenData['user_id']]);

        http_response_code(200);
        echo json_encode([
            "success"      => 1,
            "access_token" => $newAccessToken
        ]);
    }

    /**
     * Logout Endpoint
     */
    public function logout() {
        global $db;

        $refreshToken = $_COOKIE['refresh_token'] ?? null;

        if ($refreshToken) {
            $stmt = $db->prepare("DELETE FROM refresh_tokens WHERE token = ?");
            $stmt->execute([$refreshToken]);
        }

        // Clear the cookie
        $this->setRefreshTokenCookie('', time() - 3600);

        http_response_code(200);
        echo json_encode(["success" => 1, "message" => "Logged out successfully"]);
    }

    /**
     * Quick utility to check if an Access Token is valid
     */
    public function validateToken($data) {
        $jwt = new JWT();
        $token = $data["token"] ?? $this->get_header_token();

        if ($jwt->isValid($token)) {
            echo json_encode(["valid" => true]);
        } else {
            http_response_code(401);
            echo json_encode(["valid" => false, "message" => "Invalid or expired token"]);
        }
    }

    /**
     * Helper to centralize cookie settings
     */
    private function setRefreshTokenCookie(string $token, int $expires) {
        setcookie("refresh_token", $token, [
            'expires'  => $expires,
            'path'     => '/', // Match your API refresh route path
            'httponly' => true,
            'samesite' => "Lax" ,     //'Strict',
            'secure'   => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'
        ]);

        
    }

   
}