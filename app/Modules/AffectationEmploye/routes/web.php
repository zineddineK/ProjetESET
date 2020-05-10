<?php

Route::group(['module' => 'AffectationEmploye', 'middleware' => ['web'], 'namespace' => 'App\Modules\AffectationEmploye\Controllers'], function() {

    Route::resource('AffectationEmploye', 'AffectationEmployeController');

});
