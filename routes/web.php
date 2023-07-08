<?php

use Illuminate\Support\Facades\Route;

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
    return view('kamar/kamar');
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
Route::post('/pegawai/delete/{id}','App\Http\Controllers\RumahsakitController@delete');