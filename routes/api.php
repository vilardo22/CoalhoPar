<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('addresses',AdressController::class);

Route::apiResource('categories',CategoryController::class);

Route::apiResource('products',ProductController::class);

Route::prefix('products/{product}/categories')->group(function(){


    Route::get('/', [ProductCategoryController::class, 'index']);
    Route::post('/', [ProductCategoryController::class, 'store']);

});
Route::apiResource('customers',CustomerController::class);
