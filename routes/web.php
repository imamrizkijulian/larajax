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

Route::resource('contact', 'ContactController', [
	'except' => ['create']
]);
Route::get('api.contact', 'ContactController@apiContact')->name('api.contact');

Route::get('image/upload','FileController@FileCreate');
Route::post('image/upload/store','FileController@FileStore');
Route::post('image/delete','FileController@FileDestroy');

Route::get('viewmsql','ViewmsqlController@viewMsql');