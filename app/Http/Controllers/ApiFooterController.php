<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class ApiFooterController extends Controller
{
    public function index()
    {
        $data = Footer::all();
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function detail($id)
    {
        $data = Footer::find($id);
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function store(Request $request)
    {
        $data = Footer::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Footer::find($id);
        $data->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function destroy($id)
    {
        $data = Footer::find($id);
        $data->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
