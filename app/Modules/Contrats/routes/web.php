<?php

Route::group(['module' => 'Contrats', 'middleware' => ['web'], 'namespace' => 'App\Modules\Contrats\Controllers'], function() {

 
	Route::get('/liste_contrats','ContratsController@index');

    Route::get('/ajouter_contrat','ContratsController@create');

    Route::get('/contrat/{id}/show','ContratsController@show');

    Route::get('/contrat/{id}/edit','ContratsController@edit');

    Route::post('/modifier_contrat/','ContratsController@update');

	Route::get('/contrat/{id}/supprimer','ContratsController@destroy');

    Route::post('/nouveau_contrat','ContratsController@store');

    Route::resource('contrats', 'ContratsController');

});
