<?php

Route::get('/', 'MascotsController@index')->name('inicio');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/Mascota','MascotsController');
Route::get('/Mascotas', 'MascotsController@mascotSearch')->name('mascotSearch');
Route::resource('/Tratamiento','TreatmentsController');


