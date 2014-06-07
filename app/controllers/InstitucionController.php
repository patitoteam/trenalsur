<?php

class InstitucionController extends BaseController {
    public function index() {
        $instituciones = Institucion::all();

        return View::make('institucion.index')
            ->with('list', $instituciones);
    }

    public function edit($id) {
        $inst = Institucion::find($id);

        return View::make('institucion.edit')
            ->with('model', $inst)
            ->with('method', 'edit');
    }

    public function doEdit($id) {
        $model = Institucion::findOrFail($id);
        $model->nombre = Input::get('nombre');
        $model->save();

        return Redirect::to("institucion/$id/edit")
            ->with('message', 'Datos guardados con éxito')
            ->with('model', $model)
            ->with('method','edit');
    }

    public function create() {
        $model = new Institucion();
        return View::make('institucion.edit')
            ->with('model', $model)
            ->with('method', 'post');
    }

    public function doCreate() {
        $model = new Institucion();
        $model->nombre = Input::get('nombre');
        $model->save();

        return Redirect::to("institucion/$model->id/edit")
            ->with('message', 'Datos guardados con éxito')
            ->with('model', $model)
            ->with('method', 'edit');
    }

    public function doDelete($id) {
        $model = Institucion::findOrFail($id);
        $model->delete();

        return Redirect::to('institucion')
            ->with('message', 'Información eliminada');
    }
}
