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
Route::get('/Tratamiento/pdf/{id}', 'InicioController@pdf')->name('pdf.tratamiento');

Route::post('/Mascota','InicioController@store')->name('Mascota.store');

Route::get('/ajax-animal' , 'InicioController@ajax');
// <---------------------------------------------------------------------------------->

// Requiere iniciar session para entrar
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'administrar'],function(){

	Route::resource('/Reglas','RulesController');
	Route::post('/Reglas/buscar', 'RulesController@ruleSearch')->name('rule.Search');

	Route::resource('/Veterinarios','DoctorsController');
	Route::post('/Veterinarios/buscar', 'DoctorsController@doctorSearch')->name('doctor.Search');

	Route::resource('/Animales','AnimalsController');
	Route::post('/Animales/buscar', 'AnimalsController@animalSearch')->name('animal.Search');
	
	Route::resource('/Razas','RacesController');
	Route::post('/Razas/buscar', 'RacesController@raceSearch')->name('race.Search');

	Route::resource('/Sintomas','SymptomsController');
	Route::post('/Sintomas/buscar', 'SymptomsController@symptomSearch')->name('symptom.Search');

	Route::resource('/Vacunas','VaccinesController');
	Route::post('/Vacunas/buscar', 'VaccinesController@vaccineSearch')->name('vaccine.Search');

	Route::resource('/Usuarios','UsersController');
	Route::post('/Usuarios/buscar', 'UsersController@userSearch')->name('user.Search');

	Route::resource('/Tratamientos','TreatmentsController');
	Route::get('/Tratamiento/nuevo/{id}', 'TreatmentsController@createnew')->name('Tratamientos.crear');
	Route::post('/Tratamientos/buscar', 'TreatmentsController@treatmentSearch')->name('treatment.Search');
	
	Route::resource('/Mascotas','MascotsController');
	Route::post('/Macotas/buscar', 'MascotsController@mascotSearch')->name('mascott.Search');

	Route::resource('/Personas','PeopleController');
	Route::post('/Personas/buscar', 'PeopleController@personSearch')->name('person.Search');

});
// <---------------------------------------------------------------------------------->