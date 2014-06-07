<?php
Route::get('/', [
    'uses'=>'HomeController@index'
]);


Route::get('institucion', [
    'uses'=>'InstitucionController@index'
]);
Route::get('institucion/{id}/edit', [
    'uses'=>'InstitucionController@edit'
]);
Route::get('institucion/create', [
    'uses'=>'InstitucionController@create'
]);
Route::get('institucion/{id}/delete', [
    'uses'=>'InstitucionController@doDelete'
]);
Route::post('institucion/{id}/edit', [
    'uses'=>'InstitucionController@doEdit'
]);
Route::post('institucion/create', [
    'uses'=>'InstitucionController@doCreate'
]);
