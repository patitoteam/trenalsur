@extends('master')

@section('content')
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
body,html {
  height: 100%;
  position: relative;

}

body + div {
  height: 100%;
}
   #map {
  width: 100%;
  height: 600px;
  /*height: 100%;*/
  margin: 0;
  padding: 0;
}
div {
  margin: 0px;
  padding: 0px;
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
