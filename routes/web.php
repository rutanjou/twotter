<?php

use App\Twoot;

Route::get('/', function () {
    return view('app')->with([
        'twoots' => Twoot::orderBy('created_at', 'DESC')->get()
    ]);
})->name('main');

Route::get('about', function(){
    return view('about');
})->name('about');

Route::post('twoots', function(){
    Twoot::create([
        'text' => request()->text
    ]);

    return redirect()->route('main');
})->name('create');

Route::delete('twoots/{twoot}', function(Twoot $twoot){
    $twoot->delete();

    return redirect()->route('main');
})->name('delete');