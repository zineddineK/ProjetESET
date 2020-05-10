<?php

Route::group(['module' => 'Fonctions', 'middleware' => ['web'], 'namespace' => 'App\Modules\Fonctions\Controllers'], function() {

    
	Route::get('/liste_fonction','FonctionsController@index');

	//Route::get('/fonctions','FonctionsController@index');

    Route::get('/ajouter_fonction','FonctionsController@create');

    Route::get('/fonction/{id}/show','FonctionsController@show');

    Route::get('/fonction/{id}/edit','FonctionsController@edit');

    Route::post('/modifier_fonction/','FonctionsController@update');

	Route::get('/fonction/{id}/supprimer','FonctionsController@destroy');

	Route::get('/services/{stru_id}','FonctionsController@getService');

    Route::get('/fonctions/{service_id}','FonctionsController@getFonctions');

    Route::post('/nouveau_fonction','FonctionsController@store');

    Route::resource('fonctions', 'FonctionsController');

});
