<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\NilaiController; // Tambahan buat Task 5

Route::get('/', function () {
    return view('welcome');
});

// RUTE TASK 2 (Modul 2)
Route::get('/selamat-datang', [GreetingsController::class, 'welcome']);
Route::get('/greet/{nama}/{npm}', [GreetingsController::class, 'greet']);

// RUTE TASK 3 (Modul 3)
Route::get('/home', [PortfolioController::class, 'home']);
Route::get('/profil', [PortfolioController::class, 'profil']);
Route::get('/pendidikan', [PortfolioController::class, 'pendidikan']);
Route::get('/keahlian', [PortfolioController::class, 'keahlian']);

// RUTE TASK 5 (Modul 5) - Nilai Mahasiswa
Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])->name('tampilnilai');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
