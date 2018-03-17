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

Route::get('hotel', 'skiftControler@hotel');

Route::get('index', 'skiftControler@index');

Route::get('latestnews', 'skiftControler@latestnews');

Route::get('login1', 'Admin@login1');

Route::post('login2', 'Admin@login2');

Route::get('hotelnews', 'Admin@hotelnews');

Route::post('addHotel', 'Admin@addHotel');

Route::get('hotelmaintain', 'Admin@hotelmaintain');

Route::get('deletes/{id}','Admin@delete');

Route::get('edit/{id}','Admin@edit');

Route::post('update','Admin@update');







Route::auth();

Route::get('/home', 'HomeController@index');


