<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\categoryController;

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
Route::get('/products', [productController::class, 'index']);
Route::post('/insert-product', [productController::class, 'create']);
Route::get('/product-details/{id}', [productController::class, 'retrieveProductById']);
Route::post('/edit-product', [productController::class, 'update']);
Route::delete('/delete-product/{id}', [productController::class, 'destroy']);
Route::get('/categories', [categoryController::class, 'index']);
Route::post('/insert-category', [categoryController::class, 'create']);
Route::get('/category-details/{id}', [categoryController::class, 'retrieveCategoryById']);
Route::post('/edit-category', [categoryController::class, 'update']);
Route::delete('/delete-category/{id}', [categoryController::class, 'destroy']);