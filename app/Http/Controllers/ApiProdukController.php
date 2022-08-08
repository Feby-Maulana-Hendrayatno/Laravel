<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ApiProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return response()->json(['message' => 'Success', 'produk' => $produk]);
    }

    public function detail($id)
    {
        $produk = Produk::find($id);
        return response()->json(['message' => 'Success', 'produk' => $produk]);
    }

    public function store(Request $request)
    {
        $produk = Produk::create($request->all());
        return response()->json(['message' => 'Success', 'produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->update($request->all());
        return response()->json(['message' => 'Success', 'produk' => $produk]);
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return response()->json(['message' => 'Success', 'produk' => null]);
    }
}
