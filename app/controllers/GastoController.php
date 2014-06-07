<?php
class GastoController extends BaseController {
    public function index() {
        $list = Gasto::all();
        return View::make('gasto.index')
            ->with('list', $list);
    }

    public function create() {
        $model = new Gasto();
        return View::make('gasto.edit')
            ->with('method', 'post')
            ->with('model', $model);
    }

    public function doCreate() {
        $model = new Gasto();
        $model->nombre = Input::get('nombre');
        $model->total = Input::get('total');
        $model->proyecto_id = Input::get('proyecto_id');
        $model->save();

        return Redirect::to("gasto/$model->id/edit")
            ->with('method', 'edit')
            ->with('model', $model)
            ->with('message', 'Gasto creado');
    }

    public function edit($id) {
        $model = Gasto::findOrFail($id);

        return View::make('gasto.edit')
            ->with('model', $model)
            ->with('method', 'edit');
    }

    public function doEdit($id) {
        $model = Gasto::findOrFail($id);
        $model->nombre = Input::get('nombre');
        $model->total = Input::get('total');
        $model->save();


        return Redirect::to("gasto/$id/edit")
            ->with('model', $model)
            ->with('method', 'edit')
            ->with('message', 'Datos actualizados');
    }

    public function doDelete($id) {
        $model = Gasto::findOrFail($id);
        $model->delete();
        return Redirect::to('gasto');
    }
}
