
$(document).ready(function() {
  // Create the Google Map…
  var map = new google.maps.Map(d3.select("#map").node(), {
    zoom: 16,
    center: new google.maps.LatLng(-16.542929, -68.08929769999997),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var myLatlng = new google.maps.LatLng(-16.4938496,-68.0522976);
  var mapOptions = {
    zoom: 4,
    center: myLatlng
  };

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });

});