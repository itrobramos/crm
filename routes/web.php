<?php


Route::get('/pedro-guardado', function () {return view('welcomep');});
Route::get('/adrian-hernandez', function () {return view('welcomea');});

Route::get('/', function () {return view('welcome');});

Route::get('/office', function (){return view('office/index');});



Route::get('/pets', function (){return view('office/pets/index');});

Route::get('/appointments', function (){return view('office/appointments/index');});

Route::get('/finances', function (){return view('office/finances/index');});
Route::get('/finances/{id}', "FinancesController@show");



Route::get('/clients', "ClientController@index");
Route::get('/clients/create',"ClientController@create");
Route::get('/clients/{id}/edit', "ClientController@edit");