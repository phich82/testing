<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function createPromotion()
    {
        return view('admin.mile.promotion');
    }

    public function createBasic()
    {
        return view('admin.mile.basic');
    }

    public function storeBasic(Request $request)
    {
        return response()->json($request->all());
    }
}
