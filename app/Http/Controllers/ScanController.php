<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ScanController extends Controller
{
    // Halaman Scan Data Produk (Praktikum 2)
    public function index()
    {
        return view('scandataproduk');
    }

    // API untuk mencari produk berdasarkan SKU (Scan QR/Input Manual)
    public function processScanProduk(Request $request)
    {
        $request->validate(['code' => 'required|string']);
        $product = Product::where('sku', $request->code)->first();

        if ($product) {
            return response()->json([
                'success' => true,
                'product' => $product
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Produk tidak ditemukan.'
        ]);
    }
}