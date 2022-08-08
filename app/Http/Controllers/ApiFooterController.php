<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class ApiFooterController extends Controller
{
    public function index()
    {
        $footer = Footer::all();
        return response()->json(['message' => 'Success', 'footer' => $footer]);
    }

    public function detail($id)
    {
        $footer = Footer::find($id);
        return response()->json(['message' => 'Success', 'footer' => $footer]);
    }

    public function store(Request $request)
    {
        $footer = Footer::create($request->all());
        return response()->json(['message' => 'Success', 'footer' => $footer]);
    }

    public function update(Request $request, $id)
    {
        $footer = Footer::find($id);
        $footer->update($request->all());
        return response()->json(['message' => 'Success', 'footer' => $footer]);
    }

    public function destroy($id)
    {
        $footer = Footer::find($id);
        $footer->delete();
        return response()->json(['message' => 'Success', 'footer' => null]);
    }
}
