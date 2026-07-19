<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUploadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat-datang', [GreetingsController::class, 'welcome']);
Route::get('/greet/{nama}/{npm}', [GreetingsController::class, 'greet']);

Route::get('/home-porto', [PortfolioController::class, 'home'])->name('home.porto');
Route::get('/profil', [PortfolioController::class, 'profil']);
Route::get('/pendidikan', [PortfolioController::class, 'pendidikan']);
Route::get('/keahlian', [PortfolioController::class, 'keahlian']);

Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])->name('tampilnilai');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'cek.usia'])->group(function () {
    Route::get('/halaman-dewasa', function () {
        return view('dewasa');
    })->name('dewasa');
});

Route::get('/upload', [FileUploadController::class, 'index'])->name('upload.index');
Route::post('/upload', [FileUploadController::class, 'store'])->name('upload.store');
Route::delete('/upload/{filename}', [FileUploadController::class, 'destroy'])->name('upload.destroy');