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
Auth::routes();
Route::get('/','FrontController@index')->name('laman-depan');

Route::group(['middleware'=>['auth']],function(){
	Route::get('/adm','AtasController@index')->name('adm');
	Route::get('/adm-tengah','TengahController@index')->name('adm-tengah');
	Route::get('/adm-bawah','BawahController@index')->name('adm-bawah');
});
