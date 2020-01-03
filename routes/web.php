<?php


Route::get('/pedro-guardado', function () {return view('welcomep');});
Route::get('/adrian-hernandez', function () {return view('welcomea');});

Route::get('/', function () {return view('welcome');});

Route::get('/office', function (){return view('office/index');});

Route::get('/clients', function (){return view('office/clients/index');});
Route::get('/clients/{id}', "ClientController@show");

Route::get('/pets', function (){return view('office/pets/index');});

Route::get('/appointments', function (){return view('office/appointments/index');});

Route::get('/finances', function (){return view('office/finances/index');});
Route::get('/finances/{id}', "FinancesController@show");
