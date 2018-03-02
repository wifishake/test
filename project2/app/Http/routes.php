<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('admin/user','admin\UserController');
Route::resource('admin','admin\IndexController');

Route::get('welcome',function(){
	return view('Admin.welcome');
});
Route::resource('admin/cate','admin\CatesController');
// Route::resource('admin/user','admin\UserController');
Route::get('test',function(){
	return view('layouts.admin');
});
