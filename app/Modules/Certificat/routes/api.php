<?php

Route::group(['module' => 'Certificat', 'middleware' => ['api'], 'namespace' => 'App\Modules\Certificat\Controllers'], function() {

    Route::resource('Certificat', 'CertificatController');

});
