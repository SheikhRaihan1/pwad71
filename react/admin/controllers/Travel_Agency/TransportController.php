<?php
class TransportController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtVehicleType"])){
		$errors["vehicle_type"]="Invalid vehicle_type";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCompany"])){
		$errors["company"]="Invalid company";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$transport=new Transport();
		$transport->vehicle_type=$data["vehicle_type"];
		$transport->company=$data["company"];
		$transport->price=$data["price"];

			$transport->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Transport::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtVehicleType"])){
		$errors["vehicle_type"]="Invalid vehicle_type";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCompany"])){
		$errors["company"]="Invalid company";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$transport=new Transport();
			$transport->id=$data["id"];
		$transport->vehicle_type=$data["vehicle_type"];
		$transport->company=$data["company"];
		$transport->price=$data["price"];

		$transport->update();
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
		Transport::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Transport::find($id));
	}
}
?>
