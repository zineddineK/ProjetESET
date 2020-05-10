<?php



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/



Route::group(['middleware' => 'test_session_existe'], function () {



	Route::get('/',['as' => 'racine', function () {return redirect('/login');}]);

	Route::get('/login',['as' => 'login', function () {return view('auth.login');}]);

	Route::post('/vl', 'InterfaceUserController@login');



});


//A costume route made for Karima to practice on
Route::get('/karima',function(){
    //Get the first element of the prospects table
    dd(\App\Prospect::first());

});

	Route::get('/ajax-subproj','CrmController@ajax');

	Route::get('/ajax-form/{id}','CrmtelrdvController@ajax');

	Route::get('/ajax-date','CrmController@ajaxDate');

	Route::get('/ajax-prospect/{id}/{crm}','CrmtelrdvController@ajaxProspect');

	//Récup data site 

	Route::get('/chercherdatasite','ChercherDataSiteController@chercher');

	Route::post('/insertion-data-site','ChercherDataSiteController@insertion');



Route::group(['middleware' => 'test_session'], function () {


	// Route::get('/chercherdatasite','ChercherDataSiteController@chercher');

			//Authentification

	Route::get('/logout', 'InterfaceUserController@logout');

	Route::get('/acceuil', 'InterfaceUserController@acceuil');




});

