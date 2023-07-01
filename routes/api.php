<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
use App\Http\Controllers\PaymentController;

Route::post('/payment/response',[PaymentController::class,'paymentResponse'])->name("payment.response");
Route::post('/payment/payment',[PaymentController::class,'paymentData'])->name("payment.push");

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
