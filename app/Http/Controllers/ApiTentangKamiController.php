<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangKami;

class ApiTentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::all();
        return response()->json(['message' => 'Success', 'tentangKami' => $tentangKami]);
        
    }

    public function detail($id)
    {
        $data = TentangKami::find($id);
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function store(Request $request)
    {
        $data = TentangKami::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = TentangKami::find($id);
        $data->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $data]);
    }

    public function destroy($id)
    {
        $data = TentangKami::find($id);
        $data->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}
