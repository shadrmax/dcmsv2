<?php


Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/user/{id}', 'UserProfileController@index');
Route::get('/user/edit/{id}', 'UserProfileController@edit');
Route::post('/user/update', 'UserProfileController@update');
