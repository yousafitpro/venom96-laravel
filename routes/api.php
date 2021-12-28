<?php

Route::group([
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register', 'AuthController@register');
});

Route::prefix('gateway')
    ->group(function ($router) {
        Route::any('ProbhuReturnURL', [App\Http\Controllers\GatewayController::class, 'ProbhuReturnURL'])->name('gateway.updateprobhu');
        Route::any('YoappReturnURL', [App\Http\Controllers\GatewayController::class, 'YoappReturnURL'])->name('gateway.updateyoapp');
//        Route::post('updateyouapp', [App\Http\Controllers\GatewayController::class, 'updateyouapp'])->name('gateway.updateyouapp');
    });
Route::any("reset",function (){
    $c1=\Illuminate\Support\Facades\Artisan::call('config:cache');
    $c2=\Illuminate\Support\Facades\Artisan::call('cache:clear');
    $c3=\Illuminate\Support\Facades\Artisan::call('config:cache');
    return "<---Restored--->";
});
