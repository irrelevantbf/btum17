<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get("/testrequest", function(){
	return view("guest.form");
});


Route::post("/postmethod",function(Request $request){
	$data=[
		"name"=>$request->post()["name"]
	];
	return view("guest.table",["newdata"=>$data]);
})->name("posttest");


Route::get("/parameter/{id}", function($id){
	return $id;
});