<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return url('/users/login');
});

Route::get('/users/login', function () {
	return view('login');
});

Route::get('/modules/executive/director/dashboard', function () {
	return view('dashboard-executive');
});
Route::get('/modules/executive/vp/dashboard', function () {
	return view('dashboard-executive');
});

Route::get('/modules/publication/ipo/submission', function () {
	return view('publication');
});

Route::get('/modules/publication/registrar/submission', function () {
	return view('publication');
});

Route::get('/modules/system-config/admin/setup', function () {
	return view('admin-setup');
});

Route::get('/child/{name}', function ($name = 'Predo') {
	echo $name;
});
