<?php 
spl_autoload_register(function($className){
// print_r($className);
    include_once "$className.php";
});


?>