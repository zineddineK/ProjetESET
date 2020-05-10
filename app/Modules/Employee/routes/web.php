<?php

Route::group(['module' => 'Employee', 'middleware' => ['web'], 'namespace' => 'App\Modules\Employee\Controllers'], function() {

    Route::post('/nouvel_employee','EmployeeController@store');

    Route::get('/employee/{id}/edit','EmployeeController@edit');

    Route::get('/employee/{id}/show','EmployeeController@show');

    Route::get('/employee/{id}/supprimer','EmployeeController@destroy');

    Route::post('/modifier_employee','EmployeeController@update');

    Route::get('/ajouter_employee', 'EmployeeController@create');

    Route::get('/employee/{id}/confirmer_affectation', 'EmployeeController@confirmerAffectation');

    Route::resource('employees', 'EmployeeController');

});
