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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');

Route::get('/pasien', 'PasienController@index');
Route::get('/pasien/tambah','PasienController@tambah');
Route::post('/pasien/simpan','PasienController@simpan');
Route::get('/pasien/edit/{id}','PasienController@edit');
Route::put('/pasien/updated/{id}', 'PasienController@updated');
Route::get('/pasien/delete/{id}','PasienController@delete');
Route::get('/pasien/search', 'PasienController@search');

Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/tambah','DokterController@tambah');
Route::post('/dokter/simpan','DokterController@simpan');
Route::get('/dokter/edit/{id}','DokterController@edit');
Route::put('/dokter/updated/{id}', 'DokterController@updated');
Route::get('/dokter/delete/{id}','DokterController@delete');
Route::get('/dokter/search', 'DokterController@search');

Route::get('/ruangan', 'RuanganController@index');
Route::get('/ruangan/tambah','RuanganController@tambah');
Route::post('/ruangan/simpan','RuanganController@simpan');
Route::get('/ruangan/edit/{id}','RuanganController@edit');
Route::put('/ruangan/updated/{id}', 'RuanganController@updated');
Route::get('/ruangan/delete/{id}','RuanganController@delete');
Route::get('/ruangan/search', 'RuanganController@search');