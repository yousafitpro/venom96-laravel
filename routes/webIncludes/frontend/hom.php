<?php


        Route::get('/',[App\Http\Controllers\myhomeController::class, 'index'])->name('home.index');

Route::get('game/{id}',[App\Http\Controllers\myhomeController::class, 'gameDetails'])->name('home.gameDetails');
Route::get('product/{id}',[App\Http\Controllers\myhomeController::class, 'productDetails'])->name('home.productDetails');
Route::get('cart/{id}',[App\Http\Controllers\myhomeController::class, 'productCart'])->name('home.productDetails');
Route::get('product-list/{id}',[App\Http\Controllers\myhomeController::class, 'productList'])->name('home.productDetails');
