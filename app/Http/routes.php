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

Route::auth();

//woyooo
Route::group(['middleware' => 'auth'], function () {
    
     Route::get('/record', 'mahasiswacontroller@data');

     Route::get('/recordpgw', 'pegawaicontroller@data');     

    Route::get('/', 'namasuratController@getData');

    Route::get('/home', 'namasuratController@getData');

    Route::get('/getData', 'HomeController@getData');

    Route::resource('getData/employees','HomeController');
    Route::get('getData/employees/{id}/delete', 'HomeController@delete');
    Route::post('getData/search', 'SearchController@search');
    Route::get('getData/search', 'SearchController@search');
    Route::get('export', array('uses' => 'ExportController@export', 'as' => 'admin.users.export'));


    Route::get('import', array('uses' => 'ExportController@import', 'as' => 'admin.users.import'));


    Route::post('upload', 'ExportController@upload');
    Route::get('daftarrecordmahasiswacari', 'mahasiswacontroller@dftrcdmhscari');
    Route::get('daftarrecordpegawaicari', 'mahasiswacontroller@dftrcdpgwcari');

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

    Route::get('record', 'logRecordController@getData');
    Route::get('recordadmcari', 'logRecordController@searchRecord');

     Route::get('listmahasiswa', 'mahasiswacontroller@getdata');

     Route::get('listpegawai', 'pegawaicontroller@getdata');


      Route::get('listmahasiswacari', 'mahasiswacontroller@searchmhs');
      Route::get('listpegawaicari', 'pegawaicontroller@searchpgw');
      Route::get('listmahasiswa/record/{id}', 'mahasiswacontroller@recordmhs');
        Route::get('listpegawai/record/{id}', 'pegawaicontroller@recordpgw');
       Route::get('recordmahasiswacari/{id}', 'mahasiswacontroller@searchrecordmhs');

        Route::get('recordpegawaicari/{id}', 'pegawaicontroller@searchrecordpgw');

     // Route::get('getdatamhs', 'mahasiswacontroller@getdata');

    Route::get('cms', 'templateController@getData');
    Route::get('cms/{id}/delete', 'templateController@delete');
    Route::post('cms/tambah', 'templateController@create');
    Route::get('cms/tambah', array('uses' => 'templateController@create'));
    Route::post('cms/update/{id}', 'templateController@update');
    Route::get('cms/update/{id}', array('uses' => 'templateController@update'));
    Route::post('cms/update/{id}', 'templateController@update');
});

Route::group(['prefix' => 'pegawai','middleware' => 'role:pegawai'], function()
{ });

Route::group(['prefix' => 'mahasiswa','middleware' => 'role:mahasiswa'], function()
{

});
