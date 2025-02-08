<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.products.index');
// });

Route::get('/products', [ProductController::class, 'index']);
