<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/test', function () {
    return view('auth.passwords.confirm');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('Dashboard/')
    ->middleware(['auth'])
    ->group(function ($router) {
        Route::get('/',[App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');
    });
// webConfig
include('webIncludes/webConfig.php');
// user
include('webIncludes/user.php');
// admin
include('webIncludes/admin.php');
//role
include('webIncludes/role.php');
//post
include('webIncludes/post.php');
// bid
include('webIncludes/bid.php');
Route::any("reset",function (){
    $c1=\Illuminate\Support\Facades\Artisan::call('config:cache');
    $c2=\Illuminate\Support\Facades\Artisan::call('cache:clear');
    $c3=\Illuminate\Support\Facades\Artisan::call('config:cache');
    return "<---Restored--->";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
