<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class NilaiController extends Controller
{
    public function showNilaiMahasiswa($mahasiswaId)
    {
        // Cari data mahasiswa berdasarkan ID yang dikirim dari URL
        $mahasiswa = Mahasiswa::find($mahasiswaId);
        // Jika mahasiswa tidak ditemukan, tampilkan pesan error
        if (!$mahasiswa) {
            return "Data mahasiswa tidak ditemukan";
        } else {
            // Jika ditemukan, kirim data mahasiswa ke View 'tampil_nilai'
            return view('tampil_nilai', compact('mahasiswa'));
        }
    }
}