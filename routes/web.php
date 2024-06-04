<?php

use App\Http\Controllers\PhotozoneExample;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/contacts', function () {
    return view('contacts');
});

// Route::get('/dashboard', [PhotozoneExample::class, 'showExamples'])->name('showExamples');
Route::get('/products', [ShopController::class, 'index'])->name('products.index');

Route::get('/portfolio', [PhotozoneExample::class, 'showExamplesGallery'])->name('portoflio');

Route::get('/dashboard', [ShopController::class, 'showItems'])->name('showItems');

Route::get('/shop', [ShopController::class, 'index']);




