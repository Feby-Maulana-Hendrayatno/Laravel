<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ApiProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function detail($id)
    {
        $data = Produk::find($id);
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function store(Request $request)
    {
        $data = Produk::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function destroy($id)
    {
        $data = Produk::find($id);
        $data->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
