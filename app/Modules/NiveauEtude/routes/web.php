<?php

Route::group(['module' => 'NiveauEtude', 'middleware' => ['web'], 'namespace' => 'App\Modules\NiveauEtude\Controllers'], function() {

   
    Route::get('/niveaux','NiveauEtudeController@index');

    Route::get('/ajouter_niveau','NiveauEtudeController@create');

    Route::get('/niveau_etude/{id}/show','NiveauEtudeController@show');

    Route::get('/niveau_etude/{id}/edit','NiveauEtudeController@edit');

    Route::post('/modifier_niveau/','NiveauEtudeController@update');

	Route::get('/niveau_etude/{id}/supprimer','NiveauEtudeController@destroy');

    Route::post('/nouveau_niveau','NiveauEtudeController@store');

   	Route::resource('NiveauEtude', 'NiveauEtudeController');




});
