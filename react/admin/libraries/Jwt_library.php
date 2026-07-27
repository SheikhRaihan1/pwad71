<?php
class JWT {
    
    private $headers;
    private $secret;
    public $access_token_ttl = 900;    // 15 minutes in seconds

    public function __construct() {
        $this->headers = [
            'alg' => 'HS256',
            'typ' => 'JWT',
            'iss' => 'jwt.server',
            'aud' => 'intelsofts.com'
        ];
        $this->secret = "sdfghjkertyuiop345678";
    }

    // Generate Short-Lived Access Token
    public function generateAccessToken(array $payload): string {
        $headers = $this->encode(json_encode($this->headers));
        // Expiration set to 15 mins
        $payload["exp"] = time() + $this->access_token_ttl; 
        $payload = $this->encode(json_encode($payload));
        $signature = hash_hmac("SHA256", "$headers.$payload", $this->secret, true);
        $signature = $this->encode($signature);
        return "$headers.$payload.$signature";
    }

    // Generate Secure Opaque Refresh Token
    public function generateRefreshToken(): string {
        return bin2hex(random_bytes(32)); // 64-character random string
    }

    public function encode(string $str): string {
        return rtrim(strtr(base64_encode($str), "+/", "-_"), "=");
    }

    public function decode(string $str): string {
        return base64_decode(strtr($str, "-_", "+/"));
    }

    // Validate Signature and Expiration
    public function isValid(string $jwt): bool {
        $token = explode(".", $jwt);
        if (count($token) !== 3) return false;

        $client_headers = $token[0];
        $client_payload = $token[1];
        $client_signature = $token[2];

        // 1. Signature Check using hash_equals to prevent timing attacks
        $server_signature = $this->encode(
            hash_hmac("SHA256", "$client_headers.$client_payload", $this->secret, true)
        );

        if (!hash_equals($server_signature, $client_signature)) {
            return false;
        }

        // 2. Expiration Check
        $payloadData = json_decode($this->decode($client_payload));
        if (!$payloadData || !isset($payloadData->exp)) {
            return false;
        }

        if ($payloadData->exp < time()) {
            return false; // Token Expired
        }

        return true;
    }

    public function getPayload(string $jwt) {
        $token = explode(".", $jwt);
        if (isset($token[1])) {
            return json_decode($this->decode($token[1]), true);
        }
        return null;
    }
}