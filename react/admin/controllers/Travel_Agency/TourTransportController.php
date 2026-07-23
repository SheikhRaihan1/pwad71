<?php
class TourTransportController extends Controller{
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

*/
		if(count($errors)==0){
			$tourtransport=new TourTransport();

			$tourtransport->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("Travel_Agency",TourTransport::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*

*/
		if(count($errors)==0){
			$tourtransport=new TourTransport();
			$tourtransport->id=$data["id"];

		$tourtransport->update();
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
		TourTransport::delete($id);
		redirect();
	}
	public function show($id){
		view("Travel_Agency",TourTransport::find($id));
	}
}
?>
