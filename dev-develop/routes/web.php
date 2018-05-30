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

/* Exemple de route */
/*
Route::get('article/{n}', function($n) { 
    return view('article')->with('numero', $n); 
})->where('n', '[0-9]+');
*/

/*** VISITEUR ***/
Route::get('/', 'GuestController@index');


/*** AUTHENTIFICATION ***/
Auth::routes();


/*** MAIN APP ***/
Route::group(['middleware' => 'web'], function () {

	// Accueil
	Route::get('/accueil', 'AccueilController@index');

	//Admin dashboard
	Route::get('/admin/dashboard', 'AdminController@dashboard');

});


