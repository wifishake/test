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
//商品管理
Route::resource('admin/goods','admin\GoodsController');
//商品品牌管理
Route::resource('admin/goodstag','admin\GoodstagController');
//商品管理列表
Route::resource('admin/goodscates','admin\GoodscatesController');
//会员管理列表
Route::resource('admin/homeuser','admin\HomeuserController');
//管理员管理列表
Route::resource('admin/user','admin\UserController');



//主页
Route::resource('admin','admin\IndexController');

Route::get('welcome',function(){
	return view('Admin.welcome');
});


Route::resource('admin/cate','admin\CatesController');
// Route::resource('admin/user','admin\UserController');
Route::get('test',function(){
	return view('layouts.admin');
});
