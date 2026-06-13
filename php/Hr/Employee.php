<?php 

class Employee{

 public $id;
 public $name;
 public $phone;
 public $department;
 public $designation;
 public $salary;

public function __construct($id, $name, $phone,$department, $designation,$salary)
{
    $this->id= $id; 
    $this->name= $name; 
    $this->phone= $phone; 
    $this->department= $department; 
    $this->designation= $designation; 
    $this->salary= $salary; 
}
// public function set($id, $name, $phone,$department, $designation,$salary)
// {
//     $this->id= $id; 
//     $this->name= $name; 
//     $this->phone= $phone; 
//     $this->department= $department; 
//     $this->designation= $designation; 
//     $this->salary= $salary; 
// }

public function save(){
    global $db;
    
    $result = $db->query("insert into employees(name,phone,designation,department,salary)values('$this->name','$this->phone', '$this->designation', '$this->department', '$this->salary')");
   return $db->insert_id;

}
public static function find($id){
  global $db;
  $stmt= $db->query("select * from employees where id=$id");
  return $stmt->fetch_object();
}

public function update(){
  global $db;
  $stmt= $db->query("update employees set name='$this->name', phone='$this->phone',
   department='$this->department', salary='$this->salary', designation='$this->designation'
   where id= $this->id");
  return $stmt;

}

public static function delete($id){
   global $db;
   $stmt= $db->query("delete from employees where id=$id");
   return $stmt;
}

public static function all(){
  global $db;
  $data=[];
  $stmt= $db->query("select * from employees");
  $result=$stmt->fetch_all(MYSQLI_ASSOC);
  foreach ($result as $key => $value) {
    $data[]= (object) $value;   // type custing;
  }
  return   $data;
}

}
?>