<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekUsia
{
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login
        if (Auth::check()) {
            // Jika usia user kurang dari 18, arahkan ke halaman home/dashboard
            if (Auth::user()->usia < 18) {
                return redirect('/home')->with('error', 'Maaf, Anda belum berusia 18 tahun!');
            }
        }

        return $next($request);
    }
}