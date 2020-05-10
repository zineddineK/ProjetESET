<?php


	Route::post('/nouvelle_formation','FormationController@store');

	Route::get('/ajouter_formation','FormationController@create');

	Route::resource('formation', 'FormationController');

	Route::post('/modifier_formation/','FormationController@update');

	Route::get('formation/{id}/show','FormationController@show');

	Route::get('formation/{id}/edit','FormationController@edit');

	Route::get('formation/{id}/supprimer','FormationController@destroy');
