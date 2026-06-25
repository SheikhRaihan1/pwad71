<?php 
$db= new mysqli("localhost", "root", "", "mysql_evidance");

$stmt= $db->query("select * from allEmployees");
$result =  array_map( fn($e)=> (object) $e , $stmt->fetch_all(MYSQLI_ASSOC));  

$stmtdep= $db->query("select * from departments");
$resultdep =  array_map( fn($e)=> (object) $e , $stmtdep->fetch_all(MYSQLI_ASSOC)) ;

// print_r($resultdep);

if(isset($_GET["deleteId"])){
   $id= $_GET["deleteId"];
   $stmt= $db->query("delete from departments where id=$id");
   header("location:index.php");
}
if(isset($_POST["btn_submit"])){
   $name= $_POST["name"];
   $location= $_POST["location"];
   $phone= $_POST["phone"];
   $stmt= $db->query("call createDepartment('$name','$location','$phone')");
   header("location:index.php");
}

// create view allEmployees as
// select e.id , e.name, e.salary, departments.name as department from employees as e
// join departments on departments.id = e.department_id
// where e.salary > 50000; 

// delimiter $$
// create trigger delete_employee_delete_department
// after delete 
// on departments
// for each row 
// begin
//   delete from employees where department_id= old.id;
// end $$
// delimiter ;

// drop trigger if exists delete_employee_delete_department;
// SHOW TRIGGERS FROM mysql_evidance;

// delimiter $$
// create procedure createDepartment(_name varchar(50), _location varchar(50), _phone varchar(50))
// begin
//   insert into departments(name, location, phone)
//   values(_name, _location, _phone);
// end $$
// delimiter ;




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Department</h1>
       <table>
            <thead>
                 <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>location</th>
                    <th>phone</th>
                    <th>Action</th>
                 </tr>
            </thead>

            <tbody>
                  <?php 
                  
                    foreach ($resultdep as $key => $dep) {
                        $key ++;
                       echo "
                       
                       <tr>
                        <th>$key</th>
                        <th>$dep->name</th>
                        <th>$dep->location</th>
                        <th>$dep->phone</th>
                        <th> <a href='index.php?deleteId=$dep->id'>Delete</a> </th>
                       </tr>
                       
                       ";
                    }
                  
                  
                  
                  ?>
            </tbody>
       </table>

       <hr>
    <h1>Employee</h1>
          <table>
            <thead>
                 <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>salary</th>
                    <th>Department</th>
                   
                 </tr>
            </thead>

            <tbody>
                  <?php 
                  
                    foreach ($result as $key => $emp) {
                        $key ++;
                       echo "
                       
                       <tr>
                        <th>$key</th>
                        <th>$emp->name</th>
                        <th>$emp->salary</th>
                        <th>$emp->department</th>
                        
                       </tr>
                       
                       ";
                    }
                  
                  
                  
                  ?>
            </tbody>
       </table>

       <hr>

       <form action="" method="post">
           <div>
              <label for="name">name</label><br>
              <input type="text" name="name" id="">
           </div>
           <div>
              <label for="location">location</label><br>
              <input type="text" name="location" id="">
           </div>
           <div>
              <label for="phone">phone</label><br>
              <input type="text" name="phone" id="">
           </div>
           <div>
              <input type="submit" name="btn_submit" id="">
           </div>
       </form>
</body>
</html>