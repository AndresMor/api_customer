<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('customers', 'CustomerController');
Route::post('order/create', 'OrderController@store');
Route::get('order/show/{id}','OrderController@show');
Route::get('orders','OrderController@index');
Route::put('order/approve/{id}/{sw}','OrderController@approve');
Route::post('item/create', 'ItemController@store');