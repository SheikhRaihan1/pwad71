<?php
class SupplierController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("purchase");
	}
	public function create(){
		view("purchase");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!is_valid_mobile($data["mobile"])){
		$errors["mobile"]="Invalid mobile";
	}
	if(!is_valid_email($data["email"])){
		$errors["email"]="Invalid email";
	}

*/
		if(count($errors)==0){
			$supplier=new Supplier();
		$supplier->name=$data["name"];
		$supplier->mobile=$data["mobile"];
		$supplier->email=$data["email"];

			$supplier->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("purchase",Supplier::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!is_valid_mobile($data["mobile"])){
		$errors["mobile"]="Invalid mobile";
	}
	if(!is_valid_email($data["email"])){
		$errors["email"]="Invalid email";
	}

*/
		if(count($errors)==0){
			$supplier=new Supplier();
			$supplier->id=$data["id"];
		$supplier->name=$data["name"];
		$supplier->mobile=$data["mobile"];
		$supplier->email=$data["email"];

		$supplier->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("purchase");
	}
	public function delete($id){
		Supplier::delete($id);
		redirect();
	}
	public function show($id){
		view("purchase",Supplier::find($id));
	}
}
?>
