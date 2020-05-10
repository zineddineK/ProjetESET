<?php

Route::group(['module' => 'Diplome', 'middleware' => ['web'], 'namespace' => 'App\Modules\Diplome\Controllers'], function() {

    Route::resource('Diplome', 'DiplomeController');

    Route::get('/liste_diplome','DiplomeController@index');

    Route::get('/ajouter_diplome','DiplomeController@create');

    Route::get('/Diplome/{id}/show','DiplomeController@show');

    Route::get('/Diplome/{id}/edit','DiplomeController@edit');

    Route::post('/modifier_diplome/','DiplomeController@update');

	Route::get('/Diplome/{id}/supprimer','DiplomeController@destroy');

    Route::post('/nouveau_diplome','DiplomeController@store');

	Route::get('diplome/{id}', 'DiplomeController@search');

	Route::get('diplome/search/{data?}', 'DiplomeController@search');

});
