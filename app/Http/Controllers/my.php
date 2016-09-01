<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\Rv;
use Validator;
class my extends Controller
{
    public function xinchao(){
    	echo 'xin chao';
    }
     public function postForm(Request $request)
	 {
	 echo $request->name;
	 }
	 public function setcok(){
	 	$response= new Response;
	 	$response->withCookie(
	 		'hoten',
	 		'cuong',
	 		1
	 		);
	 	return $response;
	 }
	 public function getcok(Request $request){
	 	return  $request->cookie('hoten');
	 }
	 public function upload(Rv $request){
	 // 	Validator::make($request->all(), [
		// 'file'=>'mimes:jpeg,bmp,png'
		// ])->validate();
		// dd($request->all());
	 	$img='img';
	 	$file=$_FILES['file']['name'];
	 	$name=time().$file;
	 	
	 	if($request->hasFile('file')){
	 		$request->file('file')->move($img,$name);
	 		echo 'up thành công';
	 	}
	 	else{
	 		echo ' chua co file';
	 	}
	 }
}
