<?php


Route::get('/', function () {return view('welcome');});

Route::get('/office', function (){return view('office/index');});

Route::get('/clients', function (){return view('office/clients/index');});

Route::get('/clients/{id}', "ClientController@show");