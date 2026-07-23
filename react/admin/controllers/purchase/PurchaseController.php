<?php
class PurchaseController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$data["supplier_id"])){
		$errors["supplier_id"]="Invalid supplier_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["shipping_address"])){
		$errors["shipping_address"]="Invalid shipping_address";
	}
	if(!preg_match("/^[\s\S]+$/",$data["purchase_total"])){
		$errors["purchase_total"]="Invalid purchase_total";
	}
	if(!preg_match("/^[\s\S]+$/",$data["paid_amount"])){
		$errors["paid_amount"]="Invalid paid_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["remark"])){
		$errors["remark"]="Invalid remark";
	}
	if(!preg_match("/^[\s\S]+$/",$data["status_id"])){
		$errors["status_id"]="Invalid status_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount"])){
		$errors["discount"]="Invalid discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["vat"])){
		$errors["vat"]="Invalid vat";
	}

*/
		if(count($errors)==0){
			$purchase=new Purchase();
		$purchase->supplier_id=$data["supplier_id"];
		$purchase->purchase_date=date("Y-m-d",strtotime($data["purchase_date"]));
		$purchase->delivery_date=date("Y-m-d",strtotime($data["delivery_date"]));
		$purchase->shipping_address=$data["shipping_address"];
		$purchase->purchase_total=$data["purchase_total"];
		$purchase->paid_amount=$data["paid_amount"];
		$purchase->remark=$data["remark"];
		$purchase->status_id=$data["status_id"];
		$purchase->discount=$data["discount"];
		$purchase->vat=$data["vat"];
		$purchase->created_at=$now;
		$purchase->updated_at=$now;

			$purchase->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("purchase",Purchase::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$data["supplier_id"])){
		$errors["supplier_id"]="Invalid supplier_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["shipping_address"])){
		$errors["shipping_address"]="Invalid shipping_address";
	}
	if(!preg_match("/^[\s\S]+$/",$data["purchase_total"])){
		$errors["purchase_total"]="Invalid purchase_total";
	}
	if(!preg_match("/^[\s\S]+$/",$data["paid_amount"])){
		$errors["paid_amount"]="Invalid paid_amount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["remark"])){
		$errors["remark"]="Invalid remark";
	}
	if(!preg_match("/^[\s\S]+$/",$data["status_id"])){
		$errors["status_id"]="Invalid status_id";
	}
	if(!preg_match("/^[\s\S]+$/",$data["discount"])){
		$errors["discount"]="Invalid discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["vat"])){
		$errors["vat"]="Invalid vat";
	}

*/
		if(count($errors)==0){
			$purchase=new Purchase();
			$purchase->id=$data["id"];
		$purchase->supplier_id=$data["supplier_id"];
		$purchase->purchase_date=date("Y-m-d",strtotime($data["purchase_date"]));
		$purchase->delivery_date=date("Y-m-d",strtotime($data["delivery_date"]));
		$purchase->shipping_address=$data["shipping_address"];
		$purchase->purchase_total=$data["purchase_total"];
		$purchase->paid_amount=$data["paid_amount"];
		$purchase->remark=$data["remark"];
		$purchase->status_id=$data["status_id"];
		$purchase->discount=$data["discount"];
		$purchase->vat=$data["vat"];
		$purchase->created_at=$now;
		$purchase->updated_at=$now;

		$purchase->update();
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
		Purchase::delete($id);
		redirect();
	}
	public function show($id){

       $purchase_data= Purchase::find($id);

	   $purchase_details= PurchaseDetail::find_by_purchase_id($id);

	    // print_r($purchase_details);


		view("purchase", compact('purchase_data', 'purchase_details'));
	}
}
?>
