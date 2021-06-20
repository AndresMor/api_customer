<?php

namespace App\Http\Controllers;

use App\Order;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Order::all();
        $response['status'] =200;
        return response()->json($response, $response['status']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $customer = Customer::where('id', '=', $request->customer_id)->first();
            if ($customer != null) {
                $request->validate([
                    'date_order' => 'required|date|date_format:Y/m/d',
                ]);
                $order = Order::create([
                    'customer_id' => $request->customer_id,
                    'date_order' => $request->date_order,
                ]);
                $response = ['data' => $order->load('customer'), 'status' => 201,'message'=> 'created'];
                return response()->json($response,$response['status']);
            }else{
                $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => 'customer not found'];
                return response()->json($response,$response['status']);
            }
        }catch (\Throwable $e) {
            $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $e->getMessage()];
            return response()->json($response,$response['status']);
        }
    }

    public function show($id){
        try{
            $order = Order::findOrFail($id);
            if($order->items()->exists()){
                $order->load('items');
            }
            $response = ['data' => $order->load('customer'), 'status' => 200,'message'=> 'done'];
            return response()->json($response,$response['status']);
        }catch (\Throwable $e) {
            $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $e->getMessage()];
            return response()->json($response,$response['status']);
        }
    }

    public function approve($id, $sw)
    {
        try{
            $order = Order::findOrFail($id);
            if($sw == 1 && is_numeric($sw)){
                $order->update([
                    'state' => "Aprobada"
                ]);
            }elseif($sw == 0 && is_numeric($sw)){
                $order->update([
                    'state' => "Anulada"
                ]);
            }else{
                $response = ['data' => [], 'status' => 400,'message'=> 'bad request', 'error' => 'param error'];
                return response()->json($response,$response['status']);
            }
            $response = ['data' => $order->load('customer'), 'status' => 200,'message'=> 'done'];
            return response()->json($response,$response['status']);
        }catch (\Throwable $e) {
            $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $e->getMessage()];
            return response()->json($response,$response['status']);
        }
    }
}
