@extends('master')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 institucion">
    <table class="table table-striped ">
      <thead>
        <tr>
          <th class="col-md-8">Nombre Institucion</th>
          <th class="col-md-2">Editar</th>
          <th class="col-md-2">Borrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($list as $item)
          <tr>
            <td>{{$item->nombre}}</td>
            <td><a href="{{url("institucion/$item->id/edit")}}" title="">Edit</a></td>
            <td><a href="{{url("institucion/$item->id/delete")}}" title="">Delete</a></td>
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
