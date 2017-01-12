<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('app', function(){
    return view('app');
});

Route::get('about', function(){
    return view('about');
});
