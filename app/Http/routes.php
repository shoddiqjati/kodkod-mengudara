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

Route::auth();

Route::get('/home', 'HomeController@index');



Route::group(['middleware' => 'auth'], function() {



});

Route::group(['prefix' => 'admin','middleware' => 'role:admin'], function()
{
	Route::get('/', function () {
    return 'ini admin';
});


});

Route::group(['prefix' => 'pegawai','middleware' => 'role:pegawai'], function()
{

});

Route::group(['prefix' => 'mahasiswa','middleware' => 'role:mahasiswa'], function()
{

});


