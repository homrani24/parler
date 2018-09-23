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
Route::get('/marque', 'marqueController@create')->name('marque');
Route::post('/ajout_marque', 'marqueController@store')->name('ajout_marque');
Route::get('/affiche_marques', 'marqueController@index')->name('affiche_marque');
Route::get('/supp_marques/{id}', 'marqueController@destroy')->name('supp_marque');
Route::get('/edit_marques/{id}', 'marqueController@edit')->name('edit_marque');
Route::post('/update_marques/{id}', 'marqueController@update')->name('update_marque');
