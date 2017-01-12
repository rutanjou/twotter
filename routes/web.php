<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('app', function(){
    //Retourner la vue 'app'
    return view('');
});

//Créer une route pour accéder à la vue 'about'