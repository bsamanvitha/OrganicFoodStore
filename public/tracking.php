<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<body>

  <div id="map" style="width:75%;height:600px"></div>

  <script>
           var map;
           var route;
           var routeCoords = [];
           var traveledRoute;
           var marker;
           function initMap() {
               var directionsService = new google.maps.DirectionsService;
               var directionsDisplay = new google.maps.DirectionsRenderer;
               var mapCanvas = document.getElementById("map");
               var mapOptions = {
                   center: new google.maps.LatLng(37.3, -121.9),
                   zoom: 10
               }
               map = new google.maps.Map(mapCanvas, mapOptions);
               directionsDisplay.setMap(map);
               calculateAndDisplayRoute(directionsService, directionsDisplay);
           }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiOH1ikwHyClRXBnlBDnmoh4zzupZslPI&callback=initMap"></script>

</body>
