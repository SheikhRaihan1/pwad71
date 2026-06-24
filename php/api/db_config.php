<?php 
$db=new mysqli("localhost", "root", "","school");



function response(array $data , $status=200){
   http_response_code($status);
   echo json_encode($data);
}



?>

<!-- https://stackoverflow.com/questions/13170819/what-is-htaccess-file -->