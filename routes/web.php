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

Route::get('/office', function (){
    return view('office/index');
});

Route::get('/clients', function (){
    return view('office/clients/index');
});

Route::get('/schedules', function (){
    return view('office/schedules/index');
});
