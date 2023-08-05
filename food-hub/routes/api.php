<?php

use App\Http\Controllers\Backend\FoodItemController;
use App\Http\Controllers\Backend\OrderController;
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

Route::get('/foods', [FoodItemController::class, 'foods'])->name('foods');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::get('/order-status/{id}/{status}', [OrderController::class, 'change_status'])->name('change_status');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
