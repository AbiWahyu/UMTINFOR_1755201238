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
Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/mhs_list', 'MahasiswaController@mhs_list')->name('mhs.list');
Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::post('/mahasiswa/store', 'MahasiswaController@store');
Route::get('/mahasiswa/edit/{nim}', 'MahasiswaController@edit');
Route::put('/mahasiswa/update/{mahasiswa:nim}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('/mahasiswa/delete/{mahasiswa:nim}', 'MahasiswaController@destroy')->name('mahasiswa.delete');

//Prodi (Route Framework)
Route::get('prodi', 'ProdiController@index')->name('prodi.index');
Route::get('/prodi/list', 'ProdiController@prodi_list')->name('prodi.list');
Route::get('/prodi/create', 'ProdiController@create');
Route::post('/prodi/store', 'ProdiController@store');
Route::get('/prodi/edit/{kode_prodi}', 'ProdiController@edit');
Route::put('/prodi/update/{prodi:kode_prodi}', 'ProdiController@update')->name('prodi.update');
Route::get('/prodi/delete/{prodi:kode_prodi}', 'ProdiController@destroy')->name('prodi.delete');