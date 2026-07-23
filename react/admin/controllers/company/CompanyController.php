<?php


class CompanyController
{


    function index()
    {
        $data = Company::all();
        view("", compact("data"));
    }


    function create(){
        view("",);
    }
    function save(){
        print_r($_POST);

       if(isset($_POST["btn_submit"])){
       $company= new Company();
       $company->name= $_POST["name"];
       $company->email= $_POST["email"];
       $company->road= $_POST["road"];
       $company->phone= $_POST["phone"];
       $company->district_id= $_POST["district_id"];
       $company->country_id= $_POST["country_id"];
       $company->create();
         redirect();
       }
      
    }

    function delete(){
        $id= $_GET["id"];
        Company::delete($id);
        redirect();
    }

   function edit(){
     $data= Company::find($_GET["id"]);
     view("", compact("data"));
   }

   function update(){
    if(isset($_POST["btn_submit"])){
       $company= new Company();
       $company->id= $_POST["id"];
       $company->name= $_POST["name"];
       $company->email= $_POST["email"];
       $company->road= $_POST["road"];
       $company->phone= $_POST["phone"];
       $company->district_id= $_POST["district_id"];
       $company->country_id= $_POST["country_id"];
       $company->update();
         redirect();
       }
   }

}
