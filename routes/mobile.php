<?php

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 手机版

Route::group(['namespace' => 'Mobile'],function(){
    // 首页
    Route::get('/','HomeController@getIndex');
    // 分类页面
    Route::get('catelist/{id?}','HomeController@getCatelist');
    // 商品列表
    Route::get('list/{id?}','HomeController@getList');
    // 商品页面
    Route::get('good/{id}','HomeController@getGood');
    // 搜索
    Route::get('/search','HomeController@getSearch');
});

// 社会化登录认证
Route::group(['prefix' => 'oauth','namespace'=>'Auth'],function(){
    // 真正的微信登录地址
    Route::get('wxlogin', 'WxController@getWxlogin');
    // 微信登陆回调地址
    Route::get('wxlogincallback', 'WxController@getLogincallback');
    // 真正的微信注册地址
    Route::get('wxreg', 'WxController@getWxreg');
    // 微信注册回调地址
    Route::get('wxregcallback', 'WxController@getRegcallback');
    // 轮询微信登录扫码地址
    Route::get('wxscancode', 'WxController@getWxscancode');
});