@extends('master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4 institucion">
    <div class="form-group">
      @if ($method === 'post')
      {{Form::open(['url'=>'gasto/create'])}}
      @else
      {{Form::open()}}
      @endif
      <b>{{Form::label('proyecto_id', 'Proyecto:')}}</b>
      {{Form::select('proyecto_id', $proyectos, 1, array(
        'class'=>'form-control'
      ))}}
      <b>{{Form::label('nombre', 'Nombre:')}}</b>
      {{Form::text('nombre', $model->nombre, [
        'placeholder'=>'Nombre de proyecto',
        'class'=>'form-control',
        'autocomplete'=>'off'
      ])}}
      <b>{{Form::label('total', 'Total:')}}</b>
      {{Form::text('total', $model->total, [
        'class'=>'form-control',
        'placeholder'=>'Total del gasto',
        'autocomplete'=>'off'
      ])}}
      <br>
      {{Form::submit('Guardar Cambios', [
        'class'=>'btn btn-success'
      ])}}&nbsp;
      <a href="{{url("gasto")}}" class="btn btn-primary">Volver Atrás</a>
      {{Form::close()}}
    </div>
  </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="{{url('css/institucion.css')}}">
@stop
