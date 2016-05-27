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

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');

    Route::get('/home', 'HomeController@index');

    Route::get('/getData', 'HomeController@getData');

    Route::resource('getData/employees','HomeController');
    Route::get('getData/employees/{id}/delete', 'HomeController@delete');
    Route::post('getData/search', 'SearchController@search');
    Route::get('getData/search', 'SearchController@search');
    Route::get('export', array('uses' => 'ExportController@export', 'as' => 'admin.users.export'));


    Route::get('import', array('uses' => 'ExportController@import', 'as' => 'admin.users.import'));


    Route::post('upload', 'ExportController@upload');


    // Route::get('/upload', function() {
    //     return view('upload');



    // Route::get('import', function(){
    // return view('upload');
    // });


    // Route::post('image/upload', 'ExportController@upload');

    Route::get('upload', array('uses' => 'ExportController@upload'));
});

Route::group(['prefix' => 'admin','middleware' => 'role:admin'], function()
{
	Route::get('/', function () {
    return 'ini admin';
    });

     Route::get('listmahasiswa', 'mahasiswacontroller@index');

     Route::get('getdatamhs', 'mahasiswacontroller@getdata');
});

Route::group(['prefix' => 'pegawai','middleware' => 'role:pegawai'], function()
{ });

Route::group(['prefix' => 'mahasiswa','middleware' => 'role:mahasiswa'], function()
{ });
