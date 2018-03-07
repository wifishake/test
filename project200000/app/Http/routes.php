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


//后台
Route::resource('/admin/index','Admin\IndexController');

//网站配置
Route::get('/admin/config','Admin\ConfigController@config');
Route::post('/admin/config/doConfig','Admin\ConfigController@doConfig');
Route::post('/admin/config/upload','Admin\ConfigController@upload');

//评论管理
Route::resource('/admin/review','Admin\ReviewController');
Route::get('admin/review/show','Admin\ReviewController@show');



//前台
Route::get('/','Home\IndexController@index');

//评论管理
Route::get('/home/review','Home\ReviewController@index');
