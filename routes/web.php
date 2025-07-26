<?php

use Illuminate\Support\Facades\Route;  // <-- Add this import line
use App\Http\Controllers\ProductController;

Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products', [ProductController::class, 'index']); // list all products
