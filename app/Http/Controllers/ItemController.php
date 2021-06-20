<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;

class ItemController extends Controller
{
    public function store(Request $request)
    {
        try{
            $order = Order::where('id', '=', $request->order_id)->first();
            if ($order != null) {
                if ($order->state == 'Solicitada') {
                    $request->validate([
                        'width' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                        'length' => 'required|regex:/^\d+(\.\d{1,2})?$/',
                    ]);
                    $item = Item::create([
                        'order_id' => $request->order_id,
                        'width' => $request->width,
                        'length' => $request->length,
                    ]);
                    $response = ['data' => $item->load('order'), 'status' => 201,'message'=> 'created'];
                    return response()->json($response,$response['status']);
                }else{
                    $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => 'order probably approved or rejected, you cannot add items'];
                    return response()->json($response,$response['status']);
                }
            }else{
                $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => 'order not found'];
                return response()->json($response,$response['status']);
            }
        }catch (\Throwable $e) {
            $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $e->getMessage()];
            return response()->json($response,$response['status']);
        }
    }
}
