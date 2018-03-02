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
// 图片管理模块路由
Route::resource('admin/pictures','admin\picturesController');
// 前台用户查看模块
Route::resource('admin/homeuser','admin\HomeuserController');
// 后台管理员用户模块
Route::resource('admin/user','admin\UserController');
// 后台首页
Route::resource('admin','admin\IndexController');

Route::get('welcome',function(){
	return view('Admin.welcome');
});
Route::resource('admin/cate','admin\CatesController');
// Route::resource('admin/user','admin\UserController');
Route::get('test',function(){
	return view('layouts.admin');
});
