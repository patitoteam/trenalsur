@extends('master')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 institucion"><br>
    <a href="{{url("proyecto/create")}}" class="btn btn-primary">Nuevo Proyecto</a>
    <table class="table table-striped ">
      <thead>
        <tr>
          <th class="col-md-6">Nombre Proyecto</th>
          <th class="col-md-2">Gastos</th>
          <th class="col-md-2">Editar</th>
          <th class="col-md-2">Borrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($list as $item)
          <tr>
            <td>{{$item->nombre}}</td>
            <td>{{$item->gastos}}</td>
            <td><a href="{{url("proyecto/$item->id/edit")}}" title=""><i class="fa fa-edit fa-2x"></i></a></td>
            <td><a href="{{url("proyecto/$item->id/delete")}}" title=""><i class="fa fa-minus-square-o fa-2x"></i></a></td>
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
