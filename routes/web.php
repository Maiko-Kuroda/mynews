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

Route::group(['prefix'=>'admin'],function(){
    Route::get('news/create','Admin\NewsController@add');
});

//課題１
//└ Routing

//課題２
//└何度も同じ指示を書かなくていい

//課題３
//Route::get('xxx/','xxx\bbb')

//課題４
Route::group(['prefix'=>'admin'],function(){
    Rout::get('profile/create','Admin\ProfileController@add');
    Rout::get('profile/edit','Admin\ProfileController@edit');
});