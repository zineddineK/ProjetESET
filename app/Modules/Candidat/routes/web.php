<?php

Route::group(['module' => 'Candidat', 'middleware' => ['web'], 'namespace' => 'App\Modules\Candidat\Controllers'], function() {

    //Pour les projets Candidats

    Route::post('/nouvel_candidat','CandidatController@store');

    Route::get('/candidat/{id}/edit','CandidatController@edit');

    Route::get('/candidat/{id}/show','CandidatController@show');

    Route::get('/candidat/{id}/supprimer','CandidatController@destroy');

    Route::post('/modifier_candidat','CandidatController@update');

    Route::get('/ajouter_candidat', 'CandidatController@create');

    Route::get('/candidat/{id}/confirmer_affectation', 'CandidatController@confirmerAffectation');

    Route::post('/confirmer_affectation', 'CandidatController@affecter');

    Route::resource('candidats', 'CandidatController');

});
