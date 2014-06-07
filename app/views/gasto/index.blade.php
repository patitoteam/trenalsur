@extends('master')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 institucion"><br>
    <a href="{{url("gasto/create")}}" class="btn btn-primary">Nuevo Gasto</a>
    <table class="table table-striped ">
      <thead>
        <tr>
          <th class="col-md-6">Nombre Proyecto</th>
          <th class="col-md-2">Institución</th>
          <th class="col-md-2">Editar</th>
          <th class="col-md-2">Borrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($list as $item)
          <tr>
            <td>{{$item->nombre}}</td>
            @if ($item->institucion_id)
            <td>{{$item->institucion()->first()->nombre}}</td>
            @else
            <td>Sin Institución</td>
            @endif
            <td><a href="{{url("proyecto/$item->id/edit")}}" title="">Edit</a></td>
            <td><a href="{{url("proyecto/$item->id/delete")}}" title="">Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@stop

@section('styles')
<link rel="stylesheet" href="{{asset('css/institucion.css')}}">
@stop
