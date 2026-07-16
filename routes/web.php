<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingsController;

Route::get('/', function () {
    return view('welcome');
});

// TUGAS MODUL 2: Rute Dasar
Route::get('/selamat-datang', [GreetingsController::class, 'welcome']);

// TUGAS MODUL 2: Rute dengan Parameter
Route::get('/greet/{nama}/{npm}', [GreetingsController::class, 'greet']);