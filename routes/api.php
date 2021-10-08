<?php

use App\Http\Controllers\PurchaseController;
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

/* Route::middleware('auth:sanctum')->get('/test', function (Request $request) {
    return 'its work';
});
 */
Route::post('create-payment', [PurchaseController::class,'createPayment']);
Route::post('execute-payment', [PurchaseController::class,'executePayment']);
