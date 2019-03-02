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
//[‘prefix’ => ‘admin’] で http://XXXXXX.jp/admin/から始まるURL にしている
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
    /*追加
    *Laravel10 課題4
    *Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    */

    Route::get('news', 'Admin\NewsController@index')->middleware('auth');
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    /*http://XXXXXX.jp/admin/news/create にアクセスが来たら、
    *Controller Admin\NewsController のAction addに渡す という設定
    */
});

/* 0)
*Route::get('admin/news/create', 'Admin\NewsController@add');
*このように書くことで、 http://XXXXXX.jp/admin/news/create にアクセスが来たら
*Controller Admin\NewsController のAction addに渡す という設定をすることができる。
*/

/* 1)
  *admin/profile/create がどこにあるのかイマイチ把握できていません。
  *resource/views/admin/profile/create.blade.php
*/

/* 2)
  *http://....com/admin/news/create なら Admin\NewsController@addを実行する
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

Route::get('/', 'NewsController@index');
