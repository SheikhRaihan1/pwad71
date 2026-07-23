<?php
class FlightController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtAirline"])){
		$errors["airline"]="Invalid airline";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtFlightNo"])){
		$errors["flight_no"]="Invalid flight_no";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtSource"])){
		$errors["source"]="Invalid source";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtDestination"])){
		$errors["destination"]="Invalid destination";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$flight=new Flight();
		$flight->airline=$data["airline"];
		$flight->flight_no=$data["flight_no"];
		$flight->source=$data["source"];
		$flight->destination=$data["destination"];
		$flight->price=$data["price"];

			$flight->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Flight::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtAirline"])){
		$errors["airline"]="Invalid airline";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtFlightNo"])){
		$errors["flight_no"]="Invalid flight_no";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtSource"])){
		$errors["source"]="Invalid source";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtDestination"])){
		$errors["destination"]="Invalid destination";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}

*/
		if(count($errors)==0){
			$flight=new Flight();
			$flight->id=$data["id"];
		$flight->airline=$data["airline"];
		$flight->flight_no=$data["flight_no"];
		$flight->source=$data["source"];
		$flight->destination=$data["destination"];
		$flight->price=$data["price"];

		$flight->update();
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
		Flight::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Flight::find($id));
	}
}
?>
