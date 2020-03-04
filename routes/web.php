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

Route::get('saya', function () {
    return 'Halo, Apa Kabar?';
});

Route::get('siswa', 'SiswaController@index');

Route::redirect('mahasiswa', 'siswa');

Route::get('nama-siswa/{aku?}', 'SiswaController@detail')->name('profile');
