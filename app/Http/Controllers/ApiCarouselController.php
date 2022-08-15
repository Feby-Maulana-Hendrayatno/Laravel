<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use Illuminate\Http\Request;

class ApiCarouselController extends Controller
{
    public function index()
    {
        $carousel = Carousel::all();
        return response()->json(['message' => 'Success', 'carousel' => $carousel]);
    }

    public function detail($id)
    {
        $carousel = Carousel::find($id);
        return response()->json(['message' => 'Success', 'data' => $carousel]);
    }

    public function store(Request $request)
    {
        $carousel = Carousel::create($request->all());
        return response()->json(['message' => 'Success', 'data' => $carousel]);
    }

    public function update(Request $request, $id)
    {
        $carousel = Carousel::find($id);
        $carousel->update($request->all());
        return response()->json(['message' => 'Success', 'data' => $carousel]);
    }

    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();
        return response()->json(['message' => 'Success', 'data' => null]);
    }
}



