<?php
class VisaController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data["customer_id"])){
		$errors["customer_id"]="Invalid customer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCountry"])){
		$errors["country"]="Invalid country";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtVisaType"])){
		$errors["visa_type"]="Invalid visa_type";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$visa=new Visa();
		$visa->customer_id=$data["customer_id"];
		$visa->country=$data["country"];
		$visa->visa_type=$data["visa_type"];
		$visa->status=$data["status"];

			$visa->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Visa::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["customer_id"])){
		$errors["customer_id"]="Invalid customer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCountry"])){
		$errors["country"]="Invalid country";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtVisaType"])){
		$errors["visa_type"]="Invalid visa_type";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$visa=new Visa();
			$visa->id=$data["id"];
		$visa->customer_id=$data["customer_id"];
		$visa->country=$data["country"];
		$visa->visa_type=$data["visa_type"];
		$visa->status=$data["status"];

		$visa->update();
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
		Visa::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Visa::find($id));
	}
}
?>
