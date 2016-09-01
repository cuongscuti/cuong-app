<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use App\Product;
use App\Http\Requests\Validation;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Support\MessageBag;


class Productcontroller extends Controller
{
    public function show(){
    	$product = DB::table('product')->get();
        return view('Admin.manager',compact('product'));
    }
      public function getcreate(){
    	return view('Admin/formcrud');
    }
    public function create(Validation $request){
            $name= $request['name'];
            $description= $request['description'];
            $price= $request['price'];
            $img='img';
            $file=$_FILES['file']['name'];
            $name=time().$file;
            if($request->hasFile('file')){
                $request->file('file')->move($img,$name);
                $photo=$img.'/'.$name;
            }
            else{
                echo ' chua co file';
            }
            DB::table('product')->insert(
            array('name' =>$name,'description'=>$description,'price'=>$price,'photo'=>$photo)
            );
            echo'ok';
            return redirect('manager');
        // }
    }
    public function getupdate($id){
  		return view('Admin.formcrud');
    }
    public function update($id,Validation $request){
        $name= $request['name'];
    	$description= $request['description'];
    	$price= $request['price'];
    	$img='img';
            $file=$_FILES['file']['name'];
            $name=time().$file;
            if($request->hasFile('file')){
                $request->file('file')->move($img,$name);
                $photo=$img.'/'.$name;
            }
            else{
                echo ' chua co file';
            }
    	DB::table('product')
		->where('id', $id)
		->update(array('name' =>$name,'description'=>$description,'price'=>$price,'photo'=>$photo));
		return redirect('manager');
        
	}
    public function delete($id){
     	 DB::table('product')->where('id', $id)->delete() ;
         return redirect()->route('manager')->with(['flash_level'=>'success','flash_message'=>'Xóa thành công']);
    
    }
   
}
