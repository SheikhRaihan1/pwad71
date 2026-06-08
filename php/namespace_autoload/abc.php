<?php 
include_once "autoload.php";

use \Classes\Student;
use \Classes\Education\Teacher;
use \Classes\Education\School;



$teacher = new Teacher();
$student = new Student();
$school = new School($teacher, $student);



 
// include "Mango.php";
// include "Fruit.php";


 


?>