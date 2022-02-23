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

Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/product_list', [App\Http\Controllers\ProductController::class, 'index']);
    Route::get('/product/show/{product}', [App\Http\Controllers\ProductController::class, 'show']);
    Route::post('/add_product/store', [App\Http\Controllers\ProductController::class, 'store']);
    Route::put('/product/update/{product}', [App\Http\Controllers\ProductController::class, 'update']); 
    Route::delete('/product/destroy/{product}', [App\Http\Controllers\ProductController::class, 'destroy']); 
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']); 
});

