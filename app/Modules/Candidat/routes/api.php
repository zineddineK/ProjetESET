<?php

Route::group(['module' => 'Candidat', 'middleware' => ['api'], 'namespace' => 'App\Modules\Candidat\Controllers'], function() {

    Route::resource('Candidat', 'CandidatController');

});
