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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend', 'middleware' => ['auth']], function () {
    Route::resource('/pendaftaran', 'PendaftaranController');
});
