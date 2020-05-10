<?php

Route::group(['module' => 'Contrats', 'middleware' => ['api'], 'namespace' => 'App\Modules\Contrats\Controllers'], function() {

    Route::resource('Contrats', 'ContratsController');

});
