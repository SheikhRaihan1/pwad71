<?php
class TourPackageController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCountry"])){
		$errors["country"]="Invalid country";
	}
	if(!preg_match("/^[\s\S]+$/",$data["duration"])){
		$errors["duration"]="Invalid duration";
	}
	if(!preg_match("/^[\s\S]+$/",$data["hotel_id"])){
		$errors["hotel_id"]="Invalid hotel_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["flight_id"])){
		$errors["flight_id"]="Invalid flight_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["transport_id"])){
		$errors["transport_id"]="Invalid transport_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$tourpackage=new TourPackage();
		$tourpackage->name=$data["name"];
		$tourpackage->country=$data["country"];
		$tourpackage->duration=$data["duration"];
		$tourpackage->hotel_id=$data["hotel_id"];
		$tourpackage->flight_id=$data["flight_id"];
		$tourpackage->transport_id=$data["transport_id"];
		$tourpackage->price=$data["price"];

			$tourpackage->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",TourPackage::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCountry"])){
		$errors["country"]="Invalid country";
	}
	if(!preg_match("/^[\s\S]+$/",$data["duration"])){
		$errors["duration"]="Invalid duration";
	}
	if(!preg_match("/^[\s\S]+$/",$data["hotel_id"])){
		$errors["hotel_id"]="Invalid hotel_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["flight_id"])){
		$errors["flight_id"]="Invalid flight_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["transport_id"])){
		$errors["transport_id"]="Invalid transport_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$tourpackage=new TourPackage();
			$tourpackage->id=$data["id"];
		$tourpackage->name=$data["name"];
		$tourpackage->country=$data["country"];
		$tourpackage->duration=$data["duration"];
		$tourpackage->hotel_id=$data["hotel_id"];
		$tourpackage->flight_id=$data["flight_id"];
		$tourpackage->transport_id=$data["transport_id"];
		$tourpackage->price=$data["price"];

		$tourpackage->update();
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
		TourPackage::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",TourPackage::find($id));
	}
}
?>
