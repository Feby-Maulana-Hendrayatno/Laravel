<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class ApiLayananController extends Controller
{
    public function index()
    {
        $data = Layanan::all();
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function detail($id)
    {
        $data = Layanan::find($id);
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function store(Request $request)
    {
        $data = Layanan::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Layanan::find($id);
        $data->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function destroy($id)
    {
        $data = Layanan::find($id);
        $data->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
