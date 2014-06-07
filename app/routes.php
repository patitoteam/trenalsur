<?php
include (app_path().'/routes/instituciones.php');

Route::get('user/login', [
	'uses' => 'HomeController@login'
]);

Route::post('user/login', [
	'uses' => 'HomeController@doLogin'
]);

Route::get('user/register', [
	'uses' => 'HomeController@register'
]);

Route::post('user/register', [
	'uses' => 'HomeController@doRegister'
]);

Route::get('user/logout', [
	'uses' => 'HomeController@doLogout'
]);