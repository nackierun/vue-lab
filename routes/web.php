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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function(){
    return ('hello world');
});

//Route::get('/user', 'UserController@index');

Route::match(['get','post'], '/foo1', function(){
    //
});

Route::any('/foo2', function(){
    //
});

//Redirect Routes
Route::redirect('/here', '/there');
Route::redirect('/here','/there',301);
Route::permanentRedirect('/here', '/there');

//View Routes
Route::view('/welcome','welcome');
Route::view('/hello','hello',['name'=>'thanasak']);

//Required Parameters
Route::get('user/{id}', function($id){
    return 'user '.$id;
});    
Route::get('post/{post}/comment/{comment}', function($postId,$commentId){
    //
});

//Optional Parameters
Route::get('user/{name?}', function($name = null){
    return $name;
});
Route::get('username/{name?}', function($name = 'thanasak srisuwan'){
    return $name;
});

//Regular Expression Constraints
Route::get('usertest/{name}', function($name){
    //
})->where('name','[A-za-z]+');
Route:get('usertest1/{id}', function($id){
    //
})->where('id','[0-9]+');
Route::get('usertest2/{id}/{name}', function(){
    //
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//Global Constraints
