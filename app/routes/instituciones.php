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


Route::get('proyecto', ['uses'=>'ProyectoController@index']);
Route::get('proyecto/{id}/edit', ['uses'=>'ProyectoController@edit']);
Route::get('proyecto/create', ['uses'=>'ProyectoController@create']);
Route::get('proyecto/{id}/delete', ['uses'=>'ProyectoController@doDelete']);
Route::post('proyecto/{id}/edit',['uses'=>'ProyectoController@doEdit']);
Route::post('proyecto/create', ['uses'=>'ProyectoController@doCreate']);

Route::get('gasto', ['uses'=>'GastoController@index']);
Route::get('gasto/{id}/edit', ['uses'=>'GastoController@edit']);
Route::get('gasto/create', ['uses'=>'GastoController@create']);
Route::get('gasto/{id}/delete', ['uses'=>'GastoController@doDelete']);
Route::post('gasto/{id}/edit',['uses'=>'GastoController@doEdit']);
Route::post('gasto/create', ['uses'=>'GastoController@doCreate']);

Route::post('proyecto/like/{proyectoId}', ['uses'=>'SocialController@doLike']);
Route::post('proyecto/dislike/{proyectoId}', ['uses'=>'SocialController@doDisLike']);
Route::post('proyecto/comment/{proyectoId}', ['uses'=>'SocialController@doComment']);

Route::get('proyecto/likes/{proyectoId}', ['uses'=>'SocialController@likes']);
Route::get('proyecto/dislikes/{proyectoId}', ['uses'=>'SocialController@dislikes']);
Route::get('proyecto/comments/{proyectoId}', ['uses'=>'SocialController@comments']);

Route::Get('social', ['uses'=>'SocialController@index']);



View::composer('gasto.edit', function($view) {
    $list = Proyecto::all();
    if (count($list) > 0) {
        $options = array_combine($list->lists('id'), $list->lists('nombre'));
    } else {
        $options = array(null, 'No hay proyectos');
    }
    $view->with('proyectos', $options);
});
