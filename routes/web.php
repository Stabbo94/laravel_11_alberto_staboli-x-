<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

// Inserisci products
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

// Prodotti creati
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

// Form per inserimento
Route::get('/product/form', [ProductController::class, 'form'])->name('product.form');
