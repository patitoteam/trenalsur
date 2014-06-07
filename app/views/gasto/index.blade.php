@extends('master')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2 institucion"><br>
    <a href="{{url("gasto/create")}}" class="btn btn-primary">Nuevo Gasto</a>
    <table class="table table-striped ">
      <thead>
        <tr>
          <th class="col-md-6">Gasto</th>
          <th class="col-md-3">PRoyecto</th>
          <th class="col-md-2">Total</th>
          <th class="col-md-2">Editar</th>
          <th class="col-md-2">Borrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach($list as $item)
          <tr>
            <td>{{$item->nombre}}</td>
            @if ($item->proyecto_id)
            <td>{{$item->proyecto()->first()->nombre}}</td>
            @else
            <td>Sin PRoyecto</td>
            @endif
            <td>{{$item->total}}</td>
            <td><a href="{{url("gasto/$item->id/edit")}}" title=""><i class="fa fa-edit fa-2x"></i></a></td>
            <td><a href="{{url("gasto/$item->id/delete")}}" title=""><i class="fa fa-minus-square-o fa-2x"></i></a></td>
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
