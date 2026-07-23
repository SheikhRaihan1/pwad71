<?php
class UomController extends Controller{
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

*/
		if(count($errors)==0){
			$uom=new Uom();
		$uom->name=$data["name"];

			$uom->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("purchase",Uom::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$uom=new Uom();
			$uom->id=$data["id"];
		$uom->name=$data["name"];

		$uom->update();
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
		Uom::delete($id);
		redirect();
	}
	public function show($id){
		view("purchase",Uom::find($id));
	}
}
?>
