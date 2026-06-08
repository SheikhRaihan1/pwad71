<?php 


 spl_autoload_register("ClassName");

 function ClassName($class){
    // print_r($class);
    include_once "classes\\$class.php";
 }

//  include_once "classes/Lichi.php";
//  include_once "classes/Mango.php";

 $lichi= new Lichi();
 $mango = new Mango();










?>