<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;
use App\Http\Controllers\PortfolioController;

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