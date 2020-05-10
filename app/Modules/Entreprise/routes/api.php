<?php

Route::group(['module' => 'Entreprise', 'middleware' => ['api'], 'namespace' => 'App\Modules\Entreprise\Controllers'], function() {

    Route::resource('Entreprise', 'EntrepriseController');

});
