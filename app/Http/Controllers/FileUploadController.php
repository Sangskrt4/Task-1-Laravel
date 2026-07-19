<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    // 1. Tampilkan Form Upload & Daftar File
    public function index()
    {
        // Ambil semua file dari folder public/uploads
        $files = Storage::files('public/uploads');
        return view('upload', compact('files'));
    }

    // 2. Simpan File (Dengan Validasi Tugas 1)
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048' // Max 2MB
        ]);

        $file = $request->file('file');
        // Simpan dengan nama asli biar gampang dihapus
        $filename = $file->getClientOriginalName();
        $file->storeAs('public/uploads', $filename);

        return redirect()->route('upload.index')->with('success', 'File berhasil diupload!');
    }

    // 3. Hapus File (Tugas 3)
    public function destroy($filename)
    {
        Storage::delete('public/uploads/' . $filename);
        return redirect()->route('upload.index')->with('success', 'File berhasil dihapus!');
    }
}