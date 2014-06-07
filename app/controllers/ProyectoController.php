<?php
class ProyectoController extends BaseController {
    public function index() {
        $list = Proyecto::all();
        return View::make('proyecto.index')
            ->with('list', $list);
    }

    public function create() {
        $model = new Proyecto();
        return View::make('proyecto.edit')
            ->with('method', 'post')
            ->with('model', $model);
    }

    public function doCreate() {
        $model = new Proyecto();
        $model->nombre = Input::get('nombre');
        $model->descripcion = Input::get('descripcion');
        $model->lat = Input::get('lat');
        $model->long = Input::get('long');
        $model->save();

        return Redirect::to("proyecto/$model->id/edit")
            ->with('method', 'edit')
            ->with('model', $model)
            ->with('message', 'Proyecto creado');
    }

    public function edit($id) {
        $model = Proyecto::findOrFail($id);

        return View::make('proyecto.edit')
            ->with('model', $model)
            ->with('method', 'edit');
    }

    public function doEdit($id) {
        $model = Proyecto::findOrFail($id);
        $model->nombre = Input::get('nombre');
        $model->descripcion = Input::get('descripcion');
        $model->lat = Input::get('lat');
        $model->long = Input::get('long');
        $model->save();


        return Redirect::to("proyecto/$id/edit")
            ->with('model', $model)
            ->with('method', 'edit')
            ->with('message', 'Datos actualizados');
    }

    public function doDelete($id) {
        $model = Proyecto::findOrFail($id);
        $model->delete();
        return Redirect::to('proyecto');
    }
}
