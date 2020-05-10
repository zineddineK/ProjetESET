<?php

Route::group(['module' => 'Specialite', 'middleware' => ['web'], 'namespace' => 'App\Modules\Specialite\Controllers'], function() {

    Route::resource('Specialite', 'SpecialiteController');

});
