<?php
class HotelController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCity"])){
		$errors["city"]="Invalid city";
	}
	if(!preg_match("/^[\s\S]+$/",$data["rating"])){
		$errors["rating"]="Invalid rating";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price_per_night"])){
		$errors["price_per_night"]="Invalid price_per_night";
	}

*/
		if(count($errors)==0){
			$hotel=new Hotel();
		$hotel->name=$data["name"];
		$hotel->city=$data["city"];
		$hotel->rating=$data["rating"];
		$hotel->price_per_night=$data["price_per_night"];

			$hotel->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Hotel::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtCity"])){
		$errors["city"]="Invalid city";
	}
	if(!preg_match("/^[\s\S]+$/",$data["rating"])){
		$errors["rating"]="Invalid rating";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price_per_night"])){
		$errors["price_per_night"]="Invalid price_per_night";
	}

*/
		if(count($errors)==0){
			$hotel=new Hotel();
			$hotel->id=$data["id"];
		$hotel->name=$data["name"];
		$hotel->city=$data["city"];
		$hotel->rating=$data["rating"];
		$hotel->price_per_night=$data["price_per_night"];

		$hotel->update();
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
		Hotel::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Hotel::find($id));
	}
}
?>
