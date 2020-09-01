<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('daerah')->group(function () {
    Route::get('kabupaten/{id}', 'DaerahController@getkabupaten');
    Route::get('kecamatan/{id}', 'DaerahController@getkecamatan');
    Route::get('kelurahan/{id}', 'DaerahController@getkelurahan');
});

Route::prefix('provinsi')->group(function(){
    Route::get('', 'ProvinsiController@index');
    Route::get('tambah','ProvinsiController@create');
    Route::post('tambah/save', 'ProvinsiController@store');
    Route::get('edit/{id_provinsi}','ProvinsiController@edit');
    Route::patch('edit/{id_provinsi}/save', 'ProvinsiController@update');
    Route::delete('delete/{id_provinsi}', 'ProvinsiController@destroy');
});

Route::prefix('kabkota')->group(function(){
    Route::get('', 'KabkotaController@index');
    Route::get('tambah','KabkotaController@create');
    Route::post('tambah/save', 'KabkotaController@store');
    Route::get('edit/{id_kabkota}','KabkotaController@edit');
    Route::patch('edit/{id_kabkota}/save', 'KabkotaController@update');
    Route::delete('delete/{id_kabkota}', 'KabkotaController@destroy');
});

Route::prefix('kecamatan')->group(function(){
    Route::get('', 'KecamatanController@index');
    Route::get('tambah','KecamatanController@create');
    Route::post('tambah/save', 'KecamatanController@store');
    Route::get('edit/{id_provinsi}','KecamatanController@edit');
    Route::patch('edit/{id_provinsi}/save', 'KecamatanController@update');
    Route::delete('delete/{id_provinsi}', 'KecamatanController@destroy');
});

Route::prefix('keldes')->group(function(){
    Route::get('', 'KeldesController@index');
    Route::get('tambah','KeldesController@create');
    Route::post('tambah/save', 'KeldesController@store');
    Route::get('edit/{id_keldes}','KeldesController@edit');
    Route::patch('edit/{id_keldes}/save', 'KeldesController@update');
    Route::delete('delete/{id_keldes}', 'KeldesController@destroy');
});

Route::prefix('data-kelahiran')->group(function(){
    Route::get('', 'KelahiranController@index');
    Route::get('tambah','KelahiranController@create');
    Route::post('tambah/save', 'KelahiranController@store');
    Route::get('detail/{kelahiran_id}','KelahiranController@show');
    Route::get('edit/{kelahiran_id}','KelahiranController@edit');
    Route::patch('edit/{kelahiran_id}/save', 'KelahiranController@update');
    Route::delete('delete/{kelahiran_id}', 'KelahiranController@destroy');
});

Route::prefix('data-domisili')->group(function(){
    Route::get('', 'DomisiliController@index');
    Route::get('tambah','DomisiliController@create');
    Route::post('tambah/save', 'DomisiliController@store');
    Route::get('detail/{domisili_id}','DomisiliController@show');
    Route::get('edit/{domisili_id}','DomisiliController@edit');
    Route::patch('edit/{domisili_id}/save', 'DomisiliController@update');
    Route::delete('delete/{domisili_id}', 'DomisiliController@destroy');
    Route::get('cetak-pdf/{domisili_id}', 'DomisiliController@cetak_pdf');
});

Route::prefix('pengguna')->group(function(){
    Route::get('', 'UserController@index');
    Route::get('tambah','UserController@create');
    Route::post('tambah/save', 'UserController@store');
    Route::get('edit/{id_provinsi}','UserController@edit');
    Route::patch('edit/{id_provinsi}/save', 'UserController@update');
    Route::delete('delete/{id_provinsi}', 'UserController@destroy');
});

Route::prefix('rekap-kelahiran')->group(function(){
    Route::get('', 'RekapKelahiranController@index');
    Route::post('laporan','RekapKelahiranController@filterlaporan');
    Route::get('cetak-pdf/{tgl}/{tgl1}', 'RekapKelahiranController@cetak_pdf');
});

Route::prefix('rekap-domisili')->group(function(){
    Route::get('', 'RekapDomisiliController@index');
    Route::post('laporan','RekapDomisiliController@filterlaporan');
    Route::get('cetak-pdf/{tgl}/{tgl1}', 'RekapDomisiliController@cetak_pdf');
});


