<?php

Route::group(['module' => 'Employee', 'middleware' => ['api'], 'namespace' => 'App\Modules\Employee\Controllers'], function() {

    Route::resource('Employee', 'EmployeeController');

});
