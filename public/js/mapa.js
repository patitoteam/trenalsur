var message = ['CONST. MURO DE CONTENCION PJ. CANTUTAS', 'MPLEM. EMPEDRADO VARIAS CALLES ZONA JORGE MUÑOZ', 'MEJ. VIAL AVENIDA PRIMAVERA D-10', 'CONST. MURO DE CONTENCION AV. PEDRO TARIFA', 'message'];

    function initialize() {
      var mapOptions = {
        zoom: 13,
        center: new google.maps.LatLng(-16.542929,-68.08929769999997)
      };

      var map = new google.maps.Map(document.getElementById('map'),mapOptions);
      var lats = [{lat:-16.542929,long:-68.08929769999997},
      {lat:-16.532929,long:-68.04729769999997},
      {lat:-16.532929,long:-68.07929769999997},
      {lat:-16.522929,long:-68.0599769999997}
      ];

      //for
      for(var i = 0; i < lats.length; i++) {
        var southWest = new google.maps.LatLng(lats[i].lat, lats[i].long);
        var marker = new google.maps.Marker({
          position: southWest,
          map: map
        });
        marker.setTitle((i).toString());
        attachSecretMessage(marker, i);
      }
  }

  function attachSecretMessage(marker, num) {
    var infowindow = new google.maps.InfoWindow({
      content: message[num]
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(marker.get('map'), marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
