<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\RumahsakitController;


Route::get('/', function () {
    return view('master');
});
Route::get('/home', function () {
    return view('rumahsakit/home');
});
Route::get('/jeniskamar', function () {
    return view('jeniskamar/jeniskamar');
});
Route::get('/kamar', function () {
    return view('kamar/daftarkamar');
});
Route::get('/pasien', function () {
    return view('pasien/daftarpasien');
});
Route::get('/kontak', function () { 
    return view('rumahsakit/kontak');
});
Route::get('/tentang', function () {
    return view('rumahsakit/tentang');
});

Route::get('/pasien','App\Http\Controllers\RumahsakitController@index');
Route::get('/pasien/create', 'App\Http\Controllers\RumahsakitController@create')->name('pasien.create');
Route::post('/pasien/tambahpasien', 'App\Http\Controllers\RumahsakitController@tambahpasien');
Route::post('/pasien/delete/{id}','App\Http\Controllers\RumahsakitController@delete');
Route::get('/kamar','App\Http\Controllers\KamarController@index');
