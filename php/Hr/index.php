<?php
include_once "db_config.php";
include_once "Employee.php";

// $emp= new Employee("3","Jahid Mahmud","2222","EEE","Teacher","5000");
// print_r($emp->update());
?>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
          $employees = Employee::all();
        
           foreach ($employees  as $key => $employee) {
             echo "
             
               <tr>
                    <td>$employee->id</td>
                    <td>$employee->name</td>
                    <td>$employee->phone</td>
                    <td>$employee->department</td>
                    <td>$employee->designation</td>
                    <td>$employee->salary</td>
                    <td>Edit | Delete</td>
             </tr>
             
             ";
           }
        ?>
    </tbody>
</table>
