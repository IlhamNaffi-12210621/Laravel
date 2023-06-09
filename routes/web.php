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
    return view('Welcome to laravel');
});

Route::get('/about', 'App\Http\Controllers\AboutController@about');

Route::get('/home', 'App\Http\Controllers\HomeController@home');

Route::get('/anggota', 'App\Http\Controllers\AnggotaController@index');