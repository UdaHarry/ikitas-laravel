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
	Route::resource('/adm','AtasController');
	Route::get('/adm/{id}/edit','AtasController@edit');
	Route::post('/adm/{id}/update','AtasController@update');

	Route::resource('/adm-tengah','TengahController');
	Route::get('/adm-tengah/{id}/edit','TengahController@edit');
	Route::get('/adm-tengah/{id}/editAbout','TengahController@editAbout');
	Route::post('/adm-tengah/{id}/updateAbout','TengahController@updateAbout');

	Route::resource('/adm-bawah','BawahController');
	Route::post('/adm-bawah/{id}/update','BawahController@update');
});
