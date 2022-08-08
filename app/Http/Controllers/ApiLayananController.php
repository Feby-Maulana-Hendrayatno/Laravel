<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class ApiLayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        return response()->json(['message' => 'Success', 'layanan' => $layanan]);
    }

    public function detail($id)
    {
        $layanan = Layanan::find($id);
        return response()->json(['message' => 'Success', 'layanan' => $layanan]);
    }

    public function store(Request $request)
    {
        $layanan = Layanan::create($request->all());
        return response()->json(['message' => 'Success', 'layanan' => $layanan]);
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::find($id);
        $layanan->update($request->all());
        return response()->json(['message' => 'Success', 'layanan' => $layanan]);
    }

    public function destroy($id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();
        return response()->json(['message' => 'Success', 'layanan' => null]);
    }
}
