<?php

Route::group(['module' => 'Specialite', 'middleware' => ['api'], 'namespace' => 'App\Modules\Specialite\Controllers'], function() {

    Route::resource('Specialite', 'SpecialiteController');

});
