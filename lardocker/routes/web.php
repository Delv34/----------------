<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', [ProductController::class, 'all']);
Route::get('/catalog/product/{id}', [ProductController::class, 'get_product']);
Route::get('/catalog/filter', [ProductController::class, 'product_sort']);
Route::post('/catalog/product/{id}', [CommentController::class, 'add_comment'] );