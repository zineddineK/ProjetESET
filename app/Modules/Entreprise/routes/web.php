<?php

Route::group(['module' => 'Entreprise', 'middleware' => ['web'], 'namespace' => 'App\Modules\Entreprise\Controllers'], function() {


	Route::get('/liste_entreprise','EntrepriseController@index');
	
	Route::post('/nouvel_entreprise','EntrepriseController@store');

    Route::get('/entreprise/{id}/edit','EntrepriseController@edit');

    Route::get('/entreprise/{id}/show','EntrepriseController@show');

    Route::get('/entreprise/{id}/supprimer','EntrepriseController@destroy');

    Route::post('/modifier_entreprise','EntrepriseController@update');

    Route::get('/ajouter_entreprise', 'EntrepriseController@create');

    Route::resource('Entreprise', 'EntrepriseController');

});
