<?php 

class CustomerApi{

  function index(){
     echo json_encode(["customer"=>Customer::all()]);
  }
  
  function find($data){
     echo json_encode(["customer"=>Customer::find($data['id'])]);
  }
  function delete($data){
     Customer::delete($_GET['id']);
     echo json_encode(["success"=>"success"]);
  }

  function save($data, $file){

     $customer= new Customer();
     $customer->name= $data['name'];
     $customer->email= $data['email'];
     $customer->mobile= $data['mobile'];
     $customer->address= $data['address'];
     $customer->photo= upload($file["photo"], "../img", $data['name'].time());
     $customer->save();

    echo json_encode(["success"=>"Customer has been saved successfully"]);
  }

function update($data){

     $customer= new Customer();
     $customer->id= $data['id'];
     $customer->name= $data['name'];
     $customer->email= $data['email'];
     $customer->mobile= $data['mobile'];
     $customer->address= $data['address'];
     $customer->update();

    echo json_encode(["success"=>"Customer has been updated successfully"]);
  }







}

?>