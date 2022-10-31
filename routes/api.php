<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;
use App\Models\Customer;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//group route for version one of the api 
Route::group(
    ['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1' ],
    function()
    {
        //passes the return value  of the index method in our CustomerController class
        Route::apiResource('customers',CustomerController::class);
        //passes the return value of the index method in our InvoiceController
        Route::apiResource('invoices',InvoiceController::class);
    }
);
