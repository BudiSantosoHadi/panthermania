<?php

namespace App\Http\Controllers\API;

use App\Models\Dataorder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataOrderApiController extends Controller
{

    public function index($id)
    {
        $orders = Dataorder::find($id);
        return response()->json(['message' => 'success', 'Order' => $orders]);
    }

    public function store(Request $request)
    {
        $dataOrders = Dataorder::create($request->all());
        if ($request->hasFile('upload_bukti')) {
            $request->file('upload_bukti')->move('data/uploads/orders/dataorders/', $request->file('data_order')->getClientOriginalName());
            $dataOrders->upload_bukti = $request->file('upload_bukti')->getClientOriginalName();
            $dataOrders->save();
        }

        return response()->json(['message' => 'success', 'dataOrder' => $dataOrders]);
    }
}
