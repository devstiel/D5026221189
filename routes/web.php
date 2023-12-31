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


Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/mastercard', function () {
    return view('mastercard');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/java', function () {
    return view('java');
});

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/js1', function () {
    return view('js3');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/validasi', function () {
    return view('validasi');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('show', 'App\Http\Controllers\DosenController@showBlog');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');

Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@home/tentang');

Route::post('/blog/kontak', 'App\Http\Controllers\BlogController@home/kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');

Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');

Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');

Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@indexnilai');

Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiController@tambahnilai');

Route::post('/nilaikuliah/storenilai','App\Http\Controllers\NilaiController@storenilai');

Route::get('/sirup','App\Http\Controllers\SirupController@index');
Route::get('/sirup/cari','App\Http\Controllers\SirupController@cari');
Route::post('/sirup/store','App\Http\Controllers\SirupController@store');
Route::get('/sirup/tambahSirup','App\Http\Controllers\SirupController@tambah');
Route::get('/sirup/viewSirup/{kodesirup}','App\Http\Controllers\SirupController@view');
Route::get('/sirup/hapusSirup/{kodesirup}','App\Http\Controllers\SirupController@hapus');
Route::get('/sirup/editSirup/{kodesirup}','App\Http\Controllers\SirupController@edit');
Route::post('/sirup/update','App\Http\Controllers\SirupController@update');

Route::get('/karyawan','App\Http\Controllers\KaryawanController@index');
Route::get('/karyawan/hapus/{kodepegawai}','App\Http\Controllers\KaryawanController@hapus');
Route::post('/karyawan/store','App\Http\Controllers\KaryawanController@store');
Route::get('/karyawan/tambahKaryawan','App\Http\Controllers\KaryawanController@tambah');




