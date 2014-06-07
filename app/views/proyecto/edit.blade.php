@extends('master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4 institucion">
    <div class="form-group">
      @if ($method === 'post')
      {{Form::open(['url'=>'proyecto/create'])}}
      @else
      {{Form::open()}}
      @endif
      <b>{{Form::label('nombre', 'Nombre:')}}</b>
      {{Form::text('nombre', $model->nombre, [
        'placeholder'=>'Nombre de proyecto',
        'class'=>'form-control',
        'autocomplete'=>'off'
      ])}}
      <b>{{Form::label('descripcion', 'Descripción:')}}</b>
      {{Form::textarea('descripcion', $model->descripcion, [
        'class'=>'form-control',
        'rows'=>5,
        'cols'=>5
      ])}}
      <br>
      {{Form::submit('Guardar Cambios', [
        'class'=>'btn btn-success'
      ])}}&nbsp;
      <a href="{{url("proyecto")}}" class="btn btn-primary">Volver Atrás</a>
      {{Form::close()}}
    </div>
  </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="{{url('css/institucion.css')}}">
@stop
