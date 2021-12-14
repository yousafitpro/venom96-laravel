<?php
Route::prefix('product/')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('add',[App\Http\Controllers\productController::class, 'addView'])->name('admin.product.add');
        Route::post('add',[App\Http\Controllers\productController::class, 'add'])->name('admin.product.add');
        Route::get('getOne/{id}',[App\Http\Controllers\productController::class, 'getOne'])->name('admin.product.getOne');
        Route::get('deleteOne/{id}',[App\Http\Controllers\productController::class, 'deleteOne'])->name('admin.product.deleteOne');
        Route::post('update/{id}',[App\Http\Controllers\productController::class, 'update'])->name('admin.product.update');
        Route::get('getAll',[App\Http\Controllers\productController::class, 'getALL'])->name('admin.product.getAll');
    });
