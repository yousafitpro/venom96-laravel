<?php

Route::get('/front',function (){
    return view('myfrontend.index');
});
Route::get('/signin',function (){
    return view('myfrontend.pages.login');
});
Route::get('/signup',function (){
    return view('myfrontend.pages.signup');
});


//asasasa

Route::get('/cart/{id}',[App\Http\Controllers\OrderProductController::class, 'cart']);
Route::get('/product/{id}',[App\Http\Controllers\myhomeController::class, 'productDetails']);
Route::get('/productlist/{id}',[App\Http\Controllers\myhomeController::class, 'gameDetails']);
//Route::get('/cart',function (){
//    return view('myfrontend.pages.cart');
//});
