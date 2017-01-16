<?php

use App\Twoot;

Route::get('/', function () {
    return view('app')->with([
        'twoots' => []
    ]);

// Récupérer tous les "twoots" et les ajouter à la vue
//    return view('app')->with([
//        'twoots' => Twoot:: ?
//    ]);
})->name('main');


//Ici, créer une route 'about'
//Ne pas oublier d'aller modifier dans resources/views/app.blade.php le lien ! (ligne 17)
//Route::get('', function(){
//    return view('');
//})->name('');

Route::post('twoots', function(){
//    Twoot::?([
//        'text' => request()->text
//    ]);
//
//    return redirect()->route('?');
})->name('create');

Route::delete('twoots/{twoot}', function(Twoot $twoot){
    $twoot->delete();

    return redirect()->route('main');
})->name('delete');