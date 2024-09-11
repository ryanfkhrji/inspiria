<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\InspirasiController;
use App\Http\Controllers\LoginController;
use App\Models\Inspirasi;

Route::get('/', function () {
    return view('index');
});
Route::get('/jelajahi', function () {
    return view('jelajahi', [
        'data' => Inspirasi::all()
    ]);
});
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/home-page', function () {
    return view('home-page', [
        'data' => Inspirasi::all(),
        'nama' => auth()->user()->name
    ]);
});

Route::get('/buat', [InspirasiController::class, 'create']);
Route::resource('/mylist', InspirasiController::class);
Route::get('/mylist/edit/{id}', [InspirasiController::class, 'edit']);

Route::get('/masuk', [LoginController::class, 'index']);
Route::post('/masuk', [LoginController::class, 'masuk']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/daftar', [DaftarController::class, 'index'])->middleware('guest');
Route::post('/daftar', [DaftarController::class, 'daftar']);


Route::get('/cari', [InspirasiController::class, 'semua']);
