<?php

namespace App\Http\Controllers\API;

use App\Models\products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsApiController extends Controller
{

    public function index()
    {
        $products = products::all();
        return response()->json(['message' => 'success', 'dataProducts' => $products]);
    }

    public function show($id)
    {
        $products = products::find($id);
        return response()->json(['message' => 'success', 'showProducts' => $products]);
    }
}
