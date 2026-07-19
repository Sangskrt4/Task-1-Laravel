<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// ==================== TASK 2 (Rute & Controller) ====================
Route::get('/selamat-datang', [GreetingsController::class, 'welcome']);
Route::get('/greet/{nama}/{npm}', [GreetingsController::class, 'greet']);


// ==================== TASK 3 (Portofolio) ====================
Route::get('/home-porto', [PortfolioController::class, 'home'])->name('home.porto');
Route::get('/profil', [PortfolioController::class, 'profil']);
Route::get('/pendidikan', [PortfolioController::class, 'pendidikan']);
Route::get('/keahlian', [PortfolioController::class, 'keahlian']);


// ==================== TASK 5 (Nilai Mahasiswa) ====================
Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])->name('tampilnilai');


// ==================== TASK 6 & 7 (Auth + Middleware) ====================
// Auth bawaan Laravel (Login, Register, Logout, Lupa Password)
Auth::routes();

// Route Home setelah Login (dashboard auth)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute yang dilindungi Middleware Cek Usia (Task 7)
Route::middleware(['auth', 'cek.usia'])->group(function () {
    Route::get('/halaman-dewasa', function () {
        return view('dewasa');
    })->name('dewasa');
});