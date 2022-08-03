<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ApiContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function detail($id)
    {
        $data = Contact::find($id);
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function store(Request $request)
    {
        $data = Contact::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = Contact::find($id);
        $data->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function destroy($id)
    {
        $data = Contact::find($id);
        $data->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}

