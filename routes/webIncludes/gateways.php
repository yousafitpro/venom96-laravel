<?php
Route::prefix('gateway')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('gatewaySettings', [App\Http\Controllers\GatewayController::class, 'gatewaySettings'])->name('gateway.gatewaySettings');
        Route::post('updatePaypal', [App\Http\Controllers\GatewayController::class, 'updatePaypal'])->name('gateway.updatepaypal');
        Route::post('updateStripe', [App\Http\Controllers\GatewayController::class, 'updateStripe'])->name('gateway.updatestripe');
        Route::post('updateprobhu', [App\Http\Controllers\GatewayController::class, 'updateprobhu'])->name('gateway.updateprobhu');
        Route::post('updateyoapp', [App\Http\Controllers\GatewayController::class, 'updateyoapp'])->name('gateway.updateyoapp');
//        Route::post('updateyouapp', [App\Http\Controllers\GatewayController::class, 'updateyouapp'])->name('gateway.updateyouapp');
    });
