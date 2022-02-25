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
