<?php


        Route::get('/',[App\Http\Controllers\myhomeController::class, 'index'])->name('home.index');

Route::get('game/{id}',[App\Http\Controllers\myhomeController::class, 'gameDetails'])->name('home.gameDetails');
