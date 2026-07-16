<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingsController extends Controller
{
    // Method untuk route dasar
    public function welcome()
    {
        return "Selamat datang di aplikasi Laravel";
    }

    // Method untuk route dengan parameter
    public function greet($nama, $npm)
    {
        return "Halo, $nama [NPM: $npm]!";
    }
}