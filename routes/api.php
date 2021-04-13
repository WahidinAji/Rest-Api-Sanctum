<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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
//public route
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::apiResource('products', ProductController::class)->only('index');
Route::get('products/search/{name}', [ProductController::class, 'search']);
//protected route
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('products', ProductController::class)->except('index');
    Route::post('logout', [AuthController::class, 'logout']);
});
