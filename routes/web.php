<?php
Auth::routes();

// No requiere iniciar session para entrar
Route::get('/', 'InicioController@index')->name('inicio');
Route::get('/Mascotas', 'InicioController@mascotSearch')->name('mascotSearch');
Route::get('/Tratamiento/{id}','InicioController@show')->name('Tratamiento.show');
Route::post('/Mascota','InicioController@store')->name('Mascota.store');
// <---------------------------------------------------------------------------------->

// Requiere iniciar session para entrar
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'administrar'],function(){

	Route::resource('/Reglas','RulesController');
	Route::resource('/Veterinarios','DoctorsController');
	Route::resource('/Animales','AnimalsController');
	Route::resource('/Razas','RacesController');
	Route::resource('/Sintomas','SymptomsController');
	Route::resource('/Vacunas','VaccinesController');
	Route::resource('/Usuarios','UsersController');
	Route::resource('/Tratamientos','TreatmentsController');
	Route::resource('/Mascotas','MascotsController');
	Route::resource('/Personas','PeopleController');

});
// <---------------------------------------------------------------------------------->