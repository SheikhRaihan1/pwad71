<?php
class BookingController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data["package_id"])){
		$errors["package_id"]="Invalid package_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["employee_id"])){
		$errors["employee_id"]="Invalid employee_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["booking_date"])){
		$errors["booking_date"]="Invalid booking_date";
	}
	if(!preg_match("/^[\s\S]+$/",$data["travel_date"])){
		$errors["travel_date"]="Invalid travel_date";
	}
	if(!preg_match("/^[\s\S]+$/",$data["travelers"])){
		$errors["travelers"]="Invalid travelers";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$booking=new Booking();
		$booking->customer_id=$data["customer_id"];
		$booking->package_id=$data["package_id"];
		$booking->employee_id=$data["employee_id"];
		$booking->booking_date=$data["booking_date"];
		$booking->travel_date=$data["travel_date"];
		$booking->travelers=$data["travelers"];
		$booking->status=$data["status"];

			$booking->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Booking::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["customer_id"])){
		$errors["customer_id"]="Invalid customer_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["package_id"])){
		$errors["package_id"]="Invalid package_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["employee_id"])){
		$errors["employee_id"]="Invalid employee_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["booking_date"])){
		$errors["booking_date"]="Invalid booking_date";
	}
	if(!preg_match("/^[\s\S]+$/",$data["travel_date"])){
		$errors["travel_date"]="Invalid travel_date";
	}
	if(!preg_match("/^[\s\S]+$/",$data["travelers"])){
		$errors["travelers"]="Invalid travelers";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$booking=new Booking();
			$booking->id=$data["id"];
		$booking->customer_id=$data["customer_id"];
		$booking->package_id=$data["package_id"];
		$booking->employee_id=$data["employee_id"];
		$booking->booking_date=$data["booking_date"];
		$booking->travel_date=$data["travel_date"];
		$booking->travelers=$data["travelers"];
		$booking->status=$data["status"];

		$booking->update();
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
		Booking::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Booking::find($id));
	}
}
?>
