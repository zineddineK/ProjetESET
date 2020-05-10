<?php

Route::group(['module' => 'Diplome', 'middleware' => ['api'], 'namespace' => 'App\Modules\Diplome\Controllers'], function() {

    Route::resource('Diplome', 'DiplomeController');

});
