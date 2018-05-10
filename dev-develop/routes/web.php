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

Route::get('/', function () {
    return view('welcome');
});

/* Page d'authentification */
Route::get('/authentification', 'AuthentificationController@get');
Route::post('/authentification', 'AuthentificationController@post');

/* Exemple de route */
Route::get('article/{n}', function($n) { 
    return view('article')->with('numero', $n); 
})->where('n', '[0-9]+');

/* Authentification laravel */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
