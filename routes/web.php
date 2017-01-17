<?php

use App\Twoot;

Route::get('/', function () {
    // Récupérer tous les "twoots" et les ajouter à la vue
    return view('app')->with([
        'twoots' => Twoot::all()
    ]);
});
Route::get('/about',function(){
	return view ('about') ;
});
//Ici, décommenter et créer la route '/about'
//Route::get('______', function(){
//    return ____; //Renvoyer la vue 'about' !
//});

Route::post('twoots', function(){
		Twoot::create([
		'text' => request()->text
		]);
		return redirect()-> to('');
//    return redirect()->to('_');
});

Route::delete('twoots/{id}', function($id){
//    Trouver le twoot, puis le supprimer
//    Twoot::____($id)->______();
	//Twoot::find($id)->delate();
	Twoot::destroy($id);
    return redirect()->to('/');
});
