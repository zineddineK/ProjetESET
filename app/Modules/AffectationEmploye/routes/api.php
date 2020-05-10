<?php

Route::group(['module' => 'AffectationEmploye', 'middleware' => ['api'], 'namespace' => 'App\Modules\AffectationEmploye\Controllers'], function() {

    Route::resource('AffectationEmploye', 'AffectationEmployeController');

});
