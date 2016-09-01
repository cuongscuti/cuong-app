<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Support\MessageBag;
use App\User;
use App\Http\Requests\Rv;

class authcontroller extends Controller
{

	public function getdangnhap(){
		return view('Admin/dangnhap');
	}
    public function dangnhap(Rv $request){
  			$email= $request['email'];
	 	 	$password=$request['password'];
	 	 	if (Auth::attempt(['email' => $email, 'password' => $password]))
	        {
	        	return redirect()->route('manager');
	        }
	        else{
	        	$erros=new MessageBag(['errologin'=>'Email hoặc Mật khẩu không đúng']);
	        	return redirect()->back()->withErrors($erros);        
	        }
	}
    public function getdangky(){
		return view('Admin/dangky');
	}
    public function dangky(Rv $request){
		$name= $request['name'];
		$email= $request['email'];
		$password= $request['password'];
	 	$user=new User();
	 	$user->email=$email;
	 	$user->name=$name;
	 	$user->password=$password;
	 	$img='img';
	 	$file=$_FILES['file']['name'];
	 	$name=time().$file;
	 	if($request->hasFile('file')){
	 		$request->file('file')->move($img,$name);
	 		$user->file=$img.'/'.$name;
	 	}
	 	else{
	 		echo ' chua co file';
	 	}
		$user->save();
		return redirect()->route('dangnhap');
		
    }
}
