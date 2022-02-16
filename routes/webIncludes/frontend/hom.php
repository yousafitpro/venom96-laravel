<?php


        Route::get('/',[App\Http\Controllers\myhomeController::class, 'index'])->name('home.index');

Route::get('game/{id}',[App\Http\Controllers\myhomeController::class, 'gameDetails'])->name('home.gameDetails');
Route::get('product/{id}',[App\Http\Controllers\myhomeController::class, 'productDetails'])->name('home.productDetails1');
//Route::get('cart/{id}',[App\Http\Controllers\myhomeController::class, 'productCart'])->name('home.productDetails');
Route::get('product-list/{id}',[App\Http\Controllers\myhomeController::class, 'productList'])->name('home.productDetails');

Route::middleware('auth')->post('product/addToCart/{id}',[App\Http\Controllers\OrderProductController::class, 'addToCart'])->name('home.addToCart');
Route::get('cart/{id}',[App\Http\Controllers\OrderProductController::class, 'cart'])->name('home.cart');
