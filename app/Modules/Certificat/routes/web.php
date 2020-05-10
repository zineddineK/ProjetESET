<?php

Route::group(['module' => 'Certificat', 'middleware' => ['web'], 'namespace' => 'App\Modules\Certificat\Controllers'], function() {

    Route::resource('Certificat', 'CertificatController');

});
