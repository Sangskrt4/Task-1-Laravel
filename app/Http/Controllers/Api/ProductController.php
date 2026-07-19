<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return response()->json(Product::all(), 200);
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'sku' => 'required|unique:products',
            'price' => 'required|numeric',
        ]);
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function show($id) {
        return response()->json(Product::findOrFail($id), 200);
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}