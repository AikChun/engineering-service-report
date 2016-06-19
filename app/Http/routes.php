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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('service_reports', 'ServiceReportsController@index');
Route::get('service_reports/{serviceReport}', 'ServiceReportsController@show');
Route::get('service_reports/form', 'ServiceReportsController@showForm');
Route::post('service_reports/create', 'ServiceReportsController@store');

