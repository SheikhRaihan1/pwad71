<?php
class ProductController extends Controller{
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
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}
	if(!preg_match("/^[\s\S]+$/",$data["purchase_price"])){
		$errors["purchase_price"]="Invalid purchase_price";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$data["star"])){
		$errors["star"]="Invalid star";
	}
	if(!preg_match("/^[\s\S]+$/",$data["is_brand"])){
		$errors["is_brand"]="Invalid is_brand";
	}
	if(!preg_match("/^[\s\S]+$/",$data["offer_discount"])){
		$errors["offer_discount"]="Invalid offer_discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["uom_id"])){
		$errors["uom_id"]="Invalid uom_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtBarcode"])){
		$errors["barcode"]="Invalid barcode";
	}
	if(!preg_match("/^[\s\S]+$/",$data["category_id"])){
		$errors["category_id"]="Invalid category_id";
	}

*/
		if(count($errors)==0){
			$product=new Product();
		$product->name=$data["name"];
		$product->price=$data["price"];
		$product->purchase_price=$data["purchase_price"];
		$product->description=$data["description"];
		$product->photo=File::upload($file["photo"], "img",$data["id"]);
		$product->star=$data["star"];
		$product->is_brand=isset($data["is_brand"])?1:0;
		$product->offer_discount=$data["offer_discount"];
		$product->uom_id=$data["uom_id"];
		$product->barcode=$data["barcode"];
		$product->created_at=date("Y-m-d");
		$product->updated_at=date("Y-m-d");
		$product->category_id=$data["category_id"];

			$product->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("purchase",Product::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}
	if(!preg_match("/^[\s\S]+$/",$data["price"])){
		$errors["price"]="Invalid price";
	}
	if(!preg_match("/^[\s\S]+$/",$data["purchase_price"])){
		$errors["purchase_price"]="Invalid purchase_price";
	}
	if(!preg_match("/^[\s\S]+$/",$data["description"])){
		$errors["description"]="Invalid description";
	}
	if(!preg_match("/^[\s\S]+$/",$data["photo"])){
		$errors["photo"]="Invalid photo";
	}
	if(!preg_match("/^[\s\S]+$/",$data["star"])){
		$errors["star"]="Invalid star";
	}
	if(!preg_match("/^[\s\S]+$/",$data["is_brand"])){
		$errors["is_brand"]="Invalid is_brand";
	}
	if(!preg_match("/^[\s\S]+$/",$data["offer_discount"])){
		$errors["offer_discount"]="Invalid offer_discount";
	}
	if(!preg_match("/^[\s\S]+$/",$data["uom_id"])){
		$errors["uom_id"]="Invalid uom_id";
	}
	if(!preg_match("/^[\s\S]+$/",$_POST["txtBarcode"])){
		$errors["barcode"]="Invalid barcode";
	}
	if(!preg_match("/^[\s\S]+$/",$data["category_id"])){
		$errors["category_id"]="Invalid category_id";
	}

*/
		if(count($errors)==0){
			$product=new Product();
			$product->id=$data["id"];
		$product->name=$data["name"];
		$product->price=$data["price"];
		$product->purchase_price=$data["purchase_price"];
		$product->description=$data["description"];
		if($file["photo"]["name"]!=""){
			$product->photo=File::upload($file["photo"], "img",$data["id"]);
		}else{
			$product->photo=Product::find($data["id"])->photo;
		}
		$product->star=$data["star"];
		$product->is_brand=isset($data["is_brand"])?1:0;
		$product->offer_discount=$data["offer_discount"];
		$product->uom_id=$data["uom_id"];
		$product->barcode=$data["barcode"];
		$product->created_at=$now;
		$product->updated_at=$now;
		$product->category_id=$data["category_id"];

		$product->update();
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
		Product::delete($id);
		redirect();
	}
	public function show($id){
		view("purchase",Product::find($id));
	}
}
?>
