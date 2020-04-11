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

Route::prefix('admin')->group(function () {
    Route::get('satu', function () {
        return 'satu';
    });

    Route::get('dua', function () {
        return 'dua';
    });
});

// Route::fallback(function () {
//     return 'halaman Tidak Ditemukan';
// });

Route::middleware('throttle:2,1')->group(function () {
    Route::get('/terbatas', function () {
        return 'terbatas';
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::post('products', 'ProductController@store')->name('products.store');
Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::put('products/{product}', 'ProductController@update')->name('products.update');
