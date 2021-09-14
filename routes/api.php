<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'index']);

Route::get('product/{id}/show', [ProductController::class, 'show']);

Route::post('product/add', [ProductController::class, 'store']);

//Route::put('product/{id}/update', [ProductController::class, 'update']);
Route::post('product/{id}/update', [ProductController::class, 'update']);

Route::delete('product/{id}/delite', [ProductController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
