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
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::post('news/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
});
//admin/profile/create がどこにあるのかイマイチ把握できていません。

/* http://....com/admin/news/create なら Admin\NewsController@addを実行する

 *http://....com/admin/profile/edit なら Admin\ProfileController@edit を実行する
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
