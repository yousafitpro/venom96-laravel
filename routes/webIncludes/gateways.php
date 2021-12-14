<?php
Route::prefix('gateway')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('gatewaySettings', [App\Http\Controllers\GatewayController::class, 'gatewaySettings'])->name('gateway.gatewaySettings');
        Route::post('updatePaypal', [App\Http\Controllers\GatewayController::class, 'updatePaypal'])->name('gateway.updatepaypal');
        Route::post('updateStripe', [App\Http\Controllers\GatewayController::class, 'updateStripe'])->name('gateway.updatestripe');
    });
