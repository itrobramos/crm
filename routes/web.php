<?php
use Illuminate\Support\Facades\Route;

Route::get('/pedro-guardado', function () {return view('welcomep');});
Route::get('/adrian-hernandez', function () {return view('welcomea');});


//Welcome
Route::get('/', "WelcomeController@index");
Route::get('index', "WelcomeController@index");


//Dashboard
// Route::get('/office', "DashboardController@index");

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
Route::get('/appointments/request','AppointmentController@request');
Route::post('/requestappointments', 'AppointmentController@storerequest');

Route::get('/appointments/{id}', "AppointmentController@view");
// Route::get('/appointments/create/{date?}','AppointmentController@create');
Route::post('/appointments', 'AppointmentController@store');
Route::patch('/appointments/{id}', 'AppointmentController@update');


//Settings
Route::get('/settings', 'SettingsController@index');
Route::patch('/settings/', 'SettingsController@update');

//Finances
Route::get('/finances', 'FinanceController@index');
Route::get('/finances/create',"FinanceController@create");
Route::post('/finances', 'FinanceController@store');
Route::get('/finances/reports', 'FinanceController@reports');

//Notifications
Route::get('/notifications', 'NotificationController@index');

//Emails
Route::get('/emails', 'EmailController@index');
Route::get('/emails/{id}/edit', "EmailController@edit");
Route::patch('/emails/{id}', 'EmailController@update');
Route::get('/emails/new', 'EmailController@new');
Route::post('/emails/send', 'EmailController@send');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => true, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', "DashboardController@index");
Route::get('/office', "DashboardController@index");
Route::get('/logout', "DashboardController@logout");
