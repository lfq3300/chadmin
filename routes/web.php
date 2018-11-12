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
Route::group(['namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminController@index'); //后台首页

    Route::get('/admin/info/index','AdminController@admininfo');//管理员资料

    Route::get('/admin/usermember/index','AdminController@usermembershow');//用户管理界面

    Route::get('admin/banner/index','BannerController@index');//Banner列表



    Route::get('admin/article/index','AdminController@articleshow');//文章列表界面
    Route::get('admin/article/edit','AdminController@edit');//编辑文章
    Route::get('admin/article/add','AdminController@add');//新增文章
    Route::get('admin/article/delete','AdminController@delete');//删除文章



});

