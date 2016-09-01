<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('cuong/{cuong}',function( $w){
// 	echo 'dsdss:'.$w;
// })->where(['cuong'=>'[a-z]+']);



// Route::get('getform',function(){
//  return view('test');
// });
// Route::post('postForm',[
//  'as'=>'postForm',
//  'uses'=>'my@postForm'
// ]);

// route::get('setcok','my@setcok');

// route::get('getcok','my@getcok');

// route::get('upload',function() {
// 	return view('up');
// });

// route::post('postFile',['as'=>'postFile','uses'=>'my@upload']);

// route::get('database',function(){
// 	Schema::create('product',function($table){
// 		$table->increments('id');
// 		$table->string('name',100);
// 		$table->string('description',300);
// 		$table->string('photo',300);
// 		$table->integer('price');
// 		$table->timestamps();
// 		$table->rememberToken();
// 	});
// 	echo 'da tao xong bang';
// });

Route::get('manager',['middleware'=>'role',function(){
    return view('manager');
}]);

route::get('dangnhap',['as'=>'dangnhap','uses'=>'authcontroller@getdangnhap']);
route::post('dangnhap',['as'=>'postauth','uses'=>'authcontroller@dangnhap']);

route::get('dangky',['as'=>'xxdangky','uses'=>'authcontroller@getdangky']);
route::post('dangky',['as'=>'postauthre','uses'=>'authcontroller@dangky']);


route::get('manager',['as'=>'manager','uses'=>'Productcontroller@show']);

route::get('delete/{id}',['as'=>'delete','uses'=>'Productcontroller@delete']);

route::get('update/{id}',['as'=>'getupdate','uses'=>'Productcontroller@getupdate']);

route::post('update/{id}',['as'=>'postupdate','uses'=>'Productcontroller@update']);

route::get('create',['as'=>'create','uses'=>'Productcontroller@getcreate']);

route::post('create',['as'=>'postcreate','uses'=>'Productcontroller@create']);