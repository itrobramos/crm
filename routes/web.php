<?php
use Illuminate\Support\Facades\Route;

Route::get('/pedro-guardado', function () {return view('welcomep');});
Route::get('/adrian-hernandez', function () {return view('welcomea');});

Route::get('/', function () {return view('welcome');});

Route::get('/finances', function (){return view('office/finances/index');});
Route::get('/finances/{id}', "FinancesController@show");


//Dashboard
Route::get('/office', "DashboardController@index");

// Clientes
Route::get('/clients', "ClientController@index");
Route::get('/clients/create',"ClientController@create");
Route::get('/clients/{id}/edit', "ClientController@edit");
Route::post('/clients', 'ClientController@store');
Route::patch('/clients/{id}','ClientController@update');
Route::delete('/clients/{id}', 'ClientController@destroy');

// Mascotas
Route::get('/pets', "PetController@index");
Route::get('/pets/create',"PetController@create");
Route::get('/pets/{id}/edit', "PetController@edit");
Route::post('/pets', 'PetController@store');
Route::patch('/pets/{id}','PetController@update');
Route::delete('/pets/{id}', 'PetController@destroy');

//Appointments
Route::get('/appointments', 'AppointmentController@index');
Route::get('/appointments/create','AppointmentController@create');
Route::get('/appointments/{id}', "AppointmentController@view");
// Route::get('/appointments/create/{date?}','AppointmentController@create');
Route::post('/appointments', 'AppointmentController@store');
Route::patch('/appointments/{id}', 'AppointmentController@update');


//Settings
Route::get('/settings', 'SettingsController@index');
Route::patch('/settings/', 'SettingsController@update');
