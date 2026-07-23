<?php
class InvoiceController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtInvoiceNo"])){
		$errors["invoice_no"]="Invalid invoice_no";
	}
	if(!preg_match("/^[\s\S]+$/",$data["total"])){
		$errors["total"]="Invalid total";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount"])){
		$errors["discount"]="Invalid discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["vat"])){
		$errors["vat"]="Invalid vat";
	}
	if(!preg_match("/^[\s\S]+$/",$data["grand_total"])){
		$errors["grand_total"]="Invalid grand_total";
	}

*/
		if(count($errors)==0){
			$invoice=new Invoice();
		$invoice->booking_id=$data["booking_id"];
		$invoice->invoice_no=$data["invoice_no"];
		$invoice->total=$data["total"];
		$invoice->discount=$data["discount"];
		$invoice->vat=$data["vat"];
		$invoice->grand_total=$data["grand_total"];

			$invoice->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",Invoice::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["booking_id"])){
		$errors["booking_id"]="Invalid booking_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtInvoiceNo"])){
		$errors["invoice_no"]="Invalid invoice_no";
	}
	if(!preg_match("/^[\s\S]+$/",$data["total"])){
		$errors["total"]="Invalid total";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount"])){
		$errors["discount"]="Invalid discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["vat"])){
		$errors["vat"]="Invalid vat";
	}
	if(!preg_match("/^[\s\S]+$/",$data["grand_total"])){
		$errors["grand_total"]="Invalid grand_total";
	}

*/
		if(count($errors)==0){
			$invoice=new Invoice();
			$invoice->id=$data["id"];
		$invoice->booking_id=$data["booking_id"];
		$invoice->invoice_no=$data["invoice_no"];
		$invoice->total=$data["total"];
		$invoice->discount=$data["discount"];
		$invoice->vat=$data["vat"];
		$invoice->grand_total=$data["grand_total"];

		$invoice->update();
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
		Invoice::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",Invoice::find($id));
	}
}
?>
