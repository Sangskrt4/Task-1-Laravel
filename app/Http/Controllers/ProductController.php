<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Yajra\DataTables\Facades\DataTables;
class ProductController extends Controller
{
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select(['id', 'name', 'sku', 'price']);
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '<button class="btn btn-sm btn-danger" onclick="hapusProduk('.$row->id.')">Hapus</button>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}