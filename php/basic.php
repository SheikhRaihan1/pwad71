
<?php  
   echo "Hello World ";   
   print "Hello Print";
   print_r("Hello Print r");

//    single line comment
/*   multi 
     line comment
*/
 # single line comment 

echo "<br>";

$firstName= "Hasan";
$lastName = "Ali";

echo "<br>";
echo "{$firstName} {$lastName}";
echo "<br>";

$num1= 10;
$num2=5;

$sum = $num1 + $num2;
echo $sum;
echo "<br>";

$sub = $num1 - $num2;
echo $sub;
echo "<br>";

$mul = $num1 * $num2;
echo $mul;
echo "<br>";

$div = $num1 / $num2;
echo $div;
echo "<br>";

$mod = $num1 % $num2;
echo $mod;
echo "<br>";

$float1= 1.5;
$float2=  4.5;

// declaring constant
const PI= 3.1416;
define("PI2", 3.1416);

echo PI;
echo "<br>";
echo PI2;
echo "<br>";

// array 
$students= ["Jahid", "Karim", "Rafsan", "Hasib"];

echo $students[2];
echo "<br>";
// associative array 
$jahid= ["name" => "Jahid Mahmud", "age"=>23, "address"=> "Dhaka"];
$jahid= (object)  ["name" => "Jahid Mahmud", "age"=>23, "address"=> "Dhaka"];

// echo $jahid["address"];
// echo "<br>";
// print_r($jahid->address);

print_r($jahid);
echo "<br>";

$a=20;
$b=5;
$c=50;


// $result= $a+$b;
// $result= $a-$b;
// $result= $a*$b;
// $result= $a/$b;
// $result= $a%$b;

//  $a++;
//  ++$a;

// $result = $a--;

// print($a);
// print($result);


// $result= $a +=  2 ;
// $result= $a -=  2 ;
// $result= $a *=  2 ;
// $result= $a /=  2 ;
// $result= $a %=  2 ;


// $result= $a >=  $b ;
// $result= $a <=  $b ;
// $result= $a !=  $b ;
// $result= $a ==  $b ;


$a=20;
$b=5;
$c=50;
$d=50;

// $result=  $a==$b || $c == $d ;
// $result=  $a==$b && $c == $d ;









$result=(bool)  $a+$b;

var_dump($jahid);




?>





