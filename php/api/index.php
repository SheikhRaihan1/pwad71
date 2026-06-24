<?php 
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/php-error.log');

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') { exit; }

include_once "db_config.php";


$path=  isset($_GET["path"])? explode("/", trim($_GET["path"], "/"))     :[];
// print_r($path);

$class = ucfirst($path[0]);
$method= $path[1] ?? "index";
$id= $path[2] ?? null;

$file= "model/$class.php";

if(!file_exists($file)){
   response(["error"=>"File not Exists"], 400);
   exit;
}

include_once "model/$class.php";


if(!class_exists($class)){
   response(["error"=>"Calss not Exists"], 400);
   exit;
}

$obj= new $class();

if(!method_exists($obj, $method)){
   response(["error"=>"Mehtod not Exists"], 400);
   exit;
}

$data= file_get_contents("php://input");
$body= json_decode($data, true) ?? [];

$params= array_merge($_GET, $_POST, $body);

// print_r($params);

$result = $obj->$method($params,$id);

response($result)

?>