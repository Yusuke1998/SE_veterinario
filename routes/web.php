<?php

Auth::routes();

// No requiere iniciar session para entrar

Route::get('/',function(){
	return view('index');
});
Route::get('/acerca_de', function(){
	return view('acercade');
})->name('acercade');
Route::get('/registro', 'InicioController@index')->name('inicio');
Route::get('/Mascotas', 'InicioController@mascotSearch')->name('mascotSearch');
Route::get('/Tratamiento/{id}','InicioController@show')->name('Tratamiento.show');
Route::post('/Mascota','InicioController@store')->name('Mascota.store');
Route::get('/ajax-animal' , 'InicioController@ajax');
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
	Route::get('/Tratamiento/nuevo/{id}', 'TreatmentsController@createnew')->name('Tratamientos.crear');
	
	Route::resource('/Mascotas','MascotsController');
	Route::post('/Macotas/buscar', 'MascotsController@mascotSearch')->name('mascott.Search');

	Route::resource('/Personas','PeopleController');
	Route::post('/Personas/buscar', 'PeopleController@personSearch')->name('person.Search');

});
// <---------------------------------------------------------------------------------->