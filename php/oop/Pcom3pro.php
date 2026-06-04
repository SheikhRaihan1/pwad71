<?php 

include_once "Xyzmobile.php";
include_once "waterproof.php";

class PocoM3Pro extends PocoM3{
  use ExtendedFeature;
  
  public function display(){
     echo "My display is 6.5 inc";
  }

}

 $pocoPro= new PocoM3Pro();
 $pocoPro->waterproof();


?>