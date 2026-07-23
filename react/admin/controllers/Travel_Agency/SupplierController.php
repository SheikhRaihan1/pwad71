<?php
class TSupplierController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCompanyName"])){
		$errors["company_name"]="Invalid company_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPhone"])){
		$errors["phone"]="Invalid phone";
	}
	if(!is_valid_email($data["email"])){
		$errors["email"]="Invalid email";
	}

*/
		if(count($errors)==0){
			$supplier=new Supplier();
		$supplier->company_name=$data["company_name"];
		$supplier->phone=$data["phone"];
		$supplier->email=$data["email"];

			$supplier->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Supplier::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCompanyName"])){
		$errors["company_name"]="Invalid company_name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPhone"])){
		$errors["phone"]="Invalid phone";
	}
	if(!is_valid_email($data["email"])){
		$errors["email"]="Invalid email";
	}

*/
		if(count($errors)==0){
			$supplier=new Supplier();
			$supplier->id=$data["id"];
		$supplier->company_name=$data["company_name"];
		$supplier->phone=$data["phone"];
		$supplier->email=$data["email"];

		$supplier->update();
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
		Supplier::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Supplier::find($id));
	}
}
?>
