<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Customer::all();
        $response['status'] =200;
        return response()->json($response, $response['status']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $validator = Validator::make($request->all(), [
                'name' => 'required|min:3|regex:/^([^0-9]*)$/',
                'email'=> ['required','email',Rule::unique('customers','email')],
                'address'=> 'required|max:255',
                'phone'=> ['required','digits:10',Rule::unique('customers','phone')],
                'nationality'=> 'required|max:255',
             ]);
 
            if ($validator->fails()) {
                $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $validator->errors()];
                return response()->json($response,$response['status']);
            }

            $inputs = $request->input();
            $customer = Customer::create($inputs);
            $response = ['data' => $customer, 'status' => 201,'message'=> 'created'];
            return response()->json($response,$response['status']);
        }catch (\Throwable $e) {
            $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $e->getMessage()];
            return response()->json($response,$response['status']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'name' => 'min:3|regex:/^([^0-9]*)$/',
                'email'=> ['email',Rule::unique('customers','email')],
                'address'=> 'max:255',
                'phone'=> ['digits:10',Rule::unique('customers','phone')],
                'nationality'=> 'max:255',
            ]);

            if ($validator->fails()) {
                $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $validator->errors()];
                return response()->json($response,$response['status']);
            }

            $inputs = $request->all();
            $customer = Customer::findOrFail($id);
            $customer->update($inputs);
            $response = ['data' => $customer, 'status' => 200,'message'=> 'done'];
            return response()->json($response,$response['status']);
        }catch (\Throwable $e) {
            $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $e->getMessage()];
            return response()->json($response,$response['status']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $customer = Customer::findOrFail($id);
            $customer->delete();
            $response = ['data' => 'customer was deleted', 'status' => 200,'message'=> 'done'];
            return response()->json($response,$response['status']);
        }catch (\Throwable $e) {
            $response = ['data' => [], 'status' => 500,'message'=> 'server error', 'error' => $e->getMessage()];
            return response()->json($response,$response['status']);
        }
    }
}
