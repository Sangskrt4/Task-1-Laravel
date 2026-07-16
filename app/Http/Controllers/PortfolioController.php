<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profil()
    {
        $nama = "Ramadhan Sahputra";
        $npm = "123456"; 
        return view('profil', compact('nama', 'npm'));
    }

    public function pendidikan()
    {
        $kampus = "Universitas Medan Area (UMA)";
        $prodi = "Teknik Informatika";
        return view('pendidikan', compact('kampus', 'prodi'));
    }

    public function keahlian()
    {
        $skill = "Ngoding (PHP, Laravel, JavaScript), dan Design UI/UX";
        return view('keahlian', compact('skill'));
    }
}