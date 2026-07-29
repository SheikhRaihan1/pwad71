<?php

use App\Http\Controllers\Invoice;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test",function(){
   return view("test");
});

Route::get("/invoice", [Invoice::class, "ShowInvoice"]);
