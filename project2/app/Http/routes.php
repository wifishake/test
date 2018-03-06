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

//订单管理模块路由
Route::resource('admin/orders','admin\OrdersController');
// 图片管理模块路由
Route::resource('admin/pictures','admin\picturesController');
//商品管理
Route::resource('admin/goods','admin\GoodsController');
//商品品牌管理
Route::resource('admin/goodstag','admin\GoodstagController');
//商品分类管理列表
Route::resource('admin/goodscates','admin\GoodscatesController');
//会员管理列表
Route::resource('admin/homeuser','admin\HomeuserController');
//管理员路由
//    给角色授权
    Route::get('admin/user/auth/{id}','admin\UserController@auth');
//    处理授权的路由
    Route::post('admin/user/doauth','admin\UserController@doAuth');
//管理员管理列表
Route::resource('admin/user','admin\UserController');
// 权限管理
Route::resource('admin/permission','admin\PermissionController');

//    角色模块路由
//    给角色授权
    Route::get('admin/roles/auth/{id}','admin\RolesController@auth');
//    处理授权的路由
    Route::post('admin/roles/doauth','admin\RolesController@doAuth');
    Route::resource('role','RoleController');
// 角色管理
Route::resource('admin/roles','admin\RolesController');


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
