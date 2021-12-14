<?php
Route::prefix('order/')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('add',[App\Http\Controllers\OrderController::class, 'addView'])->name('admin.order.add');
        Route::post('add',[App\Http\Controllers\OrderController::class, 'add'])->name('admin.order.add');
        Route::get('getOne/{id}',[App\Http\Controllers\OrderController::class, 'getOne'])->name('admin.order.getOne');
        Route::get('deleteOne/{id}',[App\Http\Controllers\OrderController::class, 'deleteOne'])->name('admin.order.deleteOne');
        Route::post('update/{id}',[App\Http\Controllers\OrderController::class, 'update'])->name('admin.order.update');
        Route::get('getAll',[App\Http\Controllers\OrderController::class, 'getALL'])->name('admin.order.getAll');
    });
