<?php
Route::prefix('category/')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('set_as_new/{id}',[App\Http\Controllers\CategoryController::class, 'set_as_new'])->name('admin.category.set_as_new');
        Route::get('set_as_old/{id}',[App\Http\Controllers\CategoryController::class, 'set_as_old'])->name('admin.category.set_as_old');
        Route::get('add',[App\Http\Controllers\CategoryController::class, 'addView'])->name('admin.category.add');
        Route::post('add',[App\Http\Controllers\CategoryController::class, 'add'])->name('admin.category.add');
        Route::get('getOne/{id}',[App\Http\Controllers\CategoryController::class, 'getOne'])->name('admin.category.getOne');
        Route::get('deleteOne/{id}',[App\Http\Controllers\CategoryController::class, 'deleteOne'])->name('admin.category.deleteOne');
        Route::post('update/{id}',[App\Http\Controllers\CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('getAll',[App\Http\Controllers\CategoryController::class, 'getALL'])->name('admin.category.getAll');
    });
