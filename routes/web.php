<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiuMiuController;

// 1. Home Page (Langsung panggil view miumiu.home)
Route::get('/', function () {
    return view('miumiu.home');
})->name('miumiu.home');

// 2. Collection Page
Route::get('/collections/{category?}', function ($category = 'all') {
    return view('miumiu.collection', compact('category'));
})->name('miumiu.collection');

// 3. Campaign Page
Route::get('/campaign', function () {
    return view('miumiu.campaign');
})->name('miumiu.campaign');

// 4. Detail Product
Route::get('/product/{id}', [MiuMiuController::class, 'show'])->name('miumiu.product');

// 5. Resource Route Admin
Route::resource('admin/products', MiuMiuController::class)->names('products');