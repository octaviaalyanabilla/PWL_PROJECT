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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('pegawai.index');
        
    });    
    Route::get('pegawai/pdf', 'PegawaiController@pdf')->name('pegawai-pdf');
    Route::get('barang/pdf', 'BarangController@pdf')->name('barang-pdf');
    Route::resource('/pegawai', 'PegawaiController');
    Route::resource('/barang', 'BarangController');    
    Route::resource('/pendidikan', 'PendidikanController');
    Route::resource('/pelatihan', 'PelatihanController');
    Route::resource('/pengalaman', 'PengalamanController');    
    Route::resource('/agama', 'AgamaController');
    Route::resource('/negara', 'NegaraController');
    Route::resource('/darah', 'DarahController');
    Route::resource('/keluarga', 'KeluargaController');
    Route::resource('/chart', 'ChartController');
    Route::resource('pegawai.pendidikan', 'PendidikanController');
    Route::get('pegawai/pendidikan/{id}','PendidikanController@pel');
    Route::resource('pegawai.pelatihan', 'PelatihanController');
    Route::get('pegawai/pelatihan/{id}','PelatihanController@pel');
    Route::resource('pegawai.pengalaman', 'PengalamanController');
    Route::get('pegawai/pengalaman/{id}','PengalamanController@pel');
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();


