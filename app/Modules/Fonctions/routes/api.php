<?php

Route::group(['module' => 'Fonctions', 'middleware' => ['api'], 'namespace' => 'App\Modules\Fonctions\Controllers'], function() {

    Route::resource('fonctions', 'FonctionsController');

});
