@extends('master')

@section('content')
@stop

@section('scripts')
<script src="http://d3js.org/d3.v3.min.js"></script>
<script>

// Generate a Bates distribution of 10 random variables.
var values = [0.5018253987305797, 0.5319412900926546, 0.530415708606597, 0.5094932339549996, 0.47691970648011195, 0.5148464097268879, 0.4974104344029911, 0.495374611383304, 0.5150957865850069, 0.49534259425476196, 0.4792734891688451, 0.47106494452804326, 0.517936541440431, 0.49511287504341456, 0.5085614135768265, 0.4955886159534566, 0.4738641826924868, 0.5222535785729997, 0.525290523620788, 0.541274517448619, 0.47282305563567206, 0.4847657759278081, 0.5572300332039595, 0.4994494582619518, 0.4911128328088671, 0.48378344570519405, 0.5411331512150355, 0.4909094688668847, 0.4881534663704224, 0.48907228153431787, 0.4395454598637298, 0.5196998324804007, 0.46357138281688093, 0.47084728156914935, 0.5111386886006222, 0.5157521224906668, 0.4765811226889491, 0.5013227854878641, 0.5115956995566375, 0.4295109096774831, 0.5018698194017633, 0.5179287400050089, 0.5002057405468077, 0.5000630486034788, 0.466032609983813, 0.5151326633850113, 0.45253107478143645, 0.46751412605401127, 0.5192696185526438, 0.5282384972786531, 0.4738128203549422, 0.49453130185371263, 0.4947571982443333, 0.5261209223023616, 0.47094737717881796, 0.5319507110700943, 0.5308495807298459, 0.5449303836701438, 0.5443361594481394, 0.502723899546545, 0.5041748013184406, 0.5078559644776397, 0.46080888193799185, 0.48230963458074255, 0.5119616000074894, 0.5068041989649646, 0.5126333037531003, 0.487076258410234, 0.4887552166520618, 0.5527683964534663, 0.5016305263643153, 0.4767093559121713, 0.5044828942907043, 0.5106370775890536, 0.4927590639190748, 0.5075420340592973, 0.5015324838412926, 0.5043374686851166, 0.49908700736472383, 0.4562176928552799, 0.47663157967384906, 0.5085370431421324, 0.5547001974005252, 0.5052664634771645, 0.543418598799035, 0.5234110447880812, 0.40763672078959645, 0.5047008434403688, 0.4714315654756501, 0.47435100343078374, 0.399187206546776, 0.48698142615845424, 0.5826628407184035, 0.4897603421821259, 0.48139111217111347, 0.5060667014028877, 0.4714338522567414, 0.5549803534522653, 0.4702390914596617, 0.4691768284351565];

// A formatter for counts.
var formatCount = d3.format(",.0f");

var margin = {top: 10, right: 30, bottom: 30, left: 30},
    width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

var x = d3.scale.linear()
    .domain([0, 1])
    .range([0, width]);

// Generate a histogram using twenty uniformly-spaced bins.
var data = d3.layout.histogram()
    .bins(x.ticks(20))
    (values);

var y = d3.scale.linear()
    .domain([0, d3.max(data, function(d) { return d.y; })])
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var bar = svg.selectAll(".bar")
    .data(data)
  .enter().append("g")
    .attr("class", "bar")
    .attr("transform", function(d) { return "translate(" + x(d.x) + "," + y(d.y) + ")"; });

bar.append("rect")
    .attr("x", 1)
    .attr("width", x(data[0].dx) - 1)
    .attr("height", function(d) { return height - y(d.y); });

bar.append("text")
    .attr("dy", ".75em")
    .attr("y", 6)
    .attr("x", x(data[0].dx) / 2)
    .attr("text-anchor", "middle")
    .text(function(d) { return formatCount(d.y); });

svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis);

</script>
@stop

@section('styles')
<style>


.bar rect {
  fill: steelblue;
  shape-rendering: crispEdges;
}

.bar text {
  fill: #fff;
}

.axis path, .axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

</style>
@stop
