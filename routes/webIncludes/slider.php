<?php
Route::prefix('slider/')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('active/{id}',[App\Http\Controllers\SliderController::class, 'active'])->name('admin.slider.active');
        Route::get('unactive/{id}',[App\Http\Controllers\SliderController::class, 'unactive'])->name('admin.slider.unactive');
        Route::get('add',[App\Http\Controllers\SliderController::class, 'addView'])->name('admin.slider.add');
        Route::post('add',[App\Http\Controllers\SliderController::class, 'add'])->name('admin.slider.add');
        Route::get('getOne/{id}',[App\Http\Controllers\SliderController::class, 'getOne'])->name('admin.slider.getOne');
        Route::get('deleteOne/{id}',[App\Http\Controllers\SliderController::class, 'deleteOne'])->name('admin.slider.deleteOne');
        Route::post('update/{id}',[App\Http\Controllers\SliderController::class, 'update'])->name('admin.slider.update');
        Route::get('getAll',[App\Http\Controllers\SliderController::class, 'getALL'])->name('admin.slider.getAll');
    });
