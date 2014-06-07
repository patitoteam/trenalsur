@extends('master')

@section('content')
<h1>Pagina inicial</h1>
<div id="map"></div>

<div id="info"></div>
@stop

@section('scripts')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="http://mbostock.github.com/d3/d3.js?1.29.1"></script>
<script src="js/mapa.js"></script>
@stop

@section('styles')
<style type="text/css" media="screen">
   #map {
  width: 60%;
  height: 300px;
  margin: 0;
  padding: 0;
}

.stations, .stations svg {
  position: absolute;
}

.stations svg {
  width: 60px;
  height: 20px;
  padding-right: 100px;
  font: 10px sans-serif;
}

.stations circle {
  fill: brown;
  stroke: black;
  stroke-width: 1.5px;
}
</style>
@stop
