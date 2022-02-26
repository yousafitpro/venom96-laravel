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
Route::get('/productlist',function (){
    return view('myfrontend.pages.productlist');
});
Route::get('/product',function (){
    return view('myfrontend.pages.product');
});
Route::get('/cart',function (){
    return view('myfrontend.pages.cart');
});
