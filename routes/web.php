<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('add-buku', [BukuController::class, 'create']);

Route::post('add-buku', [BukuController::class, 'store']);

Route::resource('/buku', \App\Http\Controllers\BukuController::class);

Route::get('/data', function () {
    return view('data');
});

// Route untuk Passing data dari controller ke view, ambil nilai dari function data
Route::get('data', 'App\Http\Controllers\BukuController@data');

// Route untuk Passing data dari controller ke view, ambil nilai dari function nilai
Route::get('dashboard', 'App\Http\Controllers\BukuController@nilai');

// Route::get('dashboard', 'App\Http\Controllers\BukuController@jumlah');