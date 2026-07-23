<?php
class EmployeeController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("Travel_Agency");
	}
	public function create(){
		view("Travel_Agency");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPhone"])){
		$errors["phone"]="Invalid phone";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtDesignation"])){
		$errors["designation"]="Invalid designation";
	}

*/
		if(count($errors)==0){
			$employee=new Employee();
		$employee->name=$data["name"];
		$employee->phone=$data["phone"];
		$employee->designation=$data["designation"];

			$employee->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Employee::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPhone"])){
		$errors["phone"]="Invalid phone";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtDesignation"])){
		$errors["designation"]="Invalid designation";
	}

*/
		if(count($errors)==0){
			$employee=new Employee();
			$employee->id=$data["id"];
		$employee->name=$data["name"];
		$employee->phone=$data["phone"];
		$employee->designation=$data["designation"];

		$employee->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("Travel_Agency");
	}
	public function delete($id){
		Employee::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Employee::find($id));
	}
}
?>
