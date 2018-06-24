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
	Route::get('/accueil', 'AccueilController@index');

	// Admin
	Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
	Route::get('/admin/users', 'AdminController@users')->name('admin/users');
	Route::get('/admin/users/{id}', 'AdminController@showUser')->name('admin.showUser');
	Route::post('/admin/editUser/{id}', 'AdminController@showUser')->name('admin.editUser');
	Route::post('/admin/deleteUser/{id}', 'AdminController@deleteUser')->name('admin.deleteUser');

});




