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
