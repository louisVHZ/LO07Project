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
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


/*** MAIN APP ***/
Route::group(['middleware' => 'web'], function () {

	// Accueil
	Route::get('/accueil', function() {
		if(Auth::user()->role == 'nounou' && Auth::user()->admin == 0) {
			return Redirect::route('nounou.planning');
		}
		if(Auth::user()->role == 'parent' && Auth::user()->admin == 0) {
			return Redirect::route('parent.planning');
		}
		if(Auth::user()->admin == 1) {
			return Redirect::route('admin.dashboard');
		}
	});

	// Nounou
	Route::get('/planning', 'EventController@nounouPlanning')->name('nounou.planning');
	Route::get('/addDispo', 'EventController@addDispo')->name('nounou.addDispo');
	Route::post('/addDisponibilite', 'EventController@addDisponibilite')->name('nounou.addDisponibilite');

	// Parent
	Route::get('/parentPlanning', 'EventController@parentPlanning')->name('parent.planning');
	Route::get('/demandeGarde', 'EventController@demandeGarde')->name('parent.demandeGarde');
	Route::post('/addGarde', 'EventController@addGarde')->name('parent.addGarde');

	/* ADMIN */
	Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
	Route::get('/admin/users', 'AdminController@users')->name('admin/users');
	Route::get('/admin/users/{id}', 'AdminController@showUser')->name('admin.showUser');
	Route::get('/admin/candidatures', 'AdminController@showCandidatures')->name('admin.candidatures');

	Route::post('/admin/editUser/{id}', 'AdminController@editUser')->name('admin.editUser');
	Route::post('/admin/deleteUser/{id}', 'AdminController@deleteUser')->name('admin.deleteUser');
	Route::post('/admin/accepterNounou/{id}', 'AdminController@accepterNounou')->name('admin.accepterNounou');
	Route::post('/admin/refuserNounou/{id}', 'AdminController@refuserNounou')->name('admin.refuserNounou');
	/* END ADMIN */

});




