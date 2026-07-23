<?php
class PaymentController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data["booking_id"])){
		$errors["booking_id"]="Invalid booking_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["payment_date"])){
		$errors["payment_date"]="Invalid payment_date";
	}
	if(!preg_match("/^[\s\S]+$/",$data["amount"])){
		$errors["amount"]="Invalid amount";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPaymentMethod"])){
		$errors["payment_method"]="Invalid payment_method";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$payment=new Payment();
		$payment->booking_id=$data["booking_id"];
		$payment->payment_date=$data["payment_date"];
		$payment->amount=$data["amount"];
		$payment->payment_method=$data["payment_method"];
		$payment->status=$data["status"];

			$payment->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Payment::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["booking_id"])){
		$errors["booking_id"]="Invalid booking_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["payment_date"])){
		$errors["payment_date"]="Invalid payment_date";
	}
	if(!preg_match("/^[\s\S]+$/",$data["amount"])){
		$errors["amount"]="Invalid amount";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtPaymentMethod"])){
		$errors["payment_method"]="Invalid payment_method";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtStatus"])){
		$errors["status"]="Invalid status";
	}

*/
		if(count($errors)==0){
			$payment=new Payment();
			$payment->id=$data["id"];
		$payment->booking_id=$data["booking_id"];
		$payment->payment_date=$data["payment_date"];
		$payment->amount=$data["amount"];
		$payment->payment_method=$data["payment_method"];
		$payment->status=$data["status"];

		$payment->update();
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
		Payment::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Payment::find($id));
	}
}
?>
