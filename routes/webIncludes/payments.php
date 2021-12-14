<?php
Route::prefix('payment/')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('add',[App\Http\Controllers\PaymentController::class, 'addView'])->name('admin.payment.add');
        Route::post('add',[App\Http\Controllers\PaymentController::class, 'add'])->name('admin.payment.add');
        Route::get('getOne/{id}',[App\Http\Controllers\PaymentController::class, 'getOne'])->name('admin.payment.getOne');
        Route::get('deleteOne/{id}',[App\Http\Controllers\PaymentController::class, 'deleteOne'])->name('admin.payment.deleteOne');
        Route::post('update/{id}',[App\Http\Controllers\PaymentController::class, 'update'])->name('admin.payment.update');
        Route::get('getAll',[App\Http\Controllers\PaymentController::class, 'getALL'])->name('admin.payment.getAll');
    });
