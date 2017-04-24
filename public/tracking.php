<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<body>

  <div id="map" style="width:75%;height:600px"></div>

  <script>
           /*
           var map;
           var route;
           var routeCoords = [];
           var traveledRoute;
           //var marker;
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
               
               var position1 = {lat: -25.363, lng: 131.044}; //source
               var position2 = {lat: -25.363, lng: 131.044}; //destination
               var marker1 = new google.maps.Marker({
         		 position: position1,
         		 map: map
      		   });
           }*/
           
     	 		function initMap() {
       			var generalLocation = {lat: 37.3, lng: -121.9};
       			var source = {lat: 37.3688, lng: -122.036};
       			var destination = {lat: 37.77, lng: -122.42};
       			var map = new google.maps.Map(document.getElementById('map'), {
        			  zoom: 6,
         			  center: generalLocation
       			 });
        		var marker1 = new google.maps.Marker({
         		 position: source,
         		 map: map
       			 });
       			var marker2 = new google.maps.Marker({
         		 position: destination,
         		 map: map
       			 });
      			}

  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiOH1ikwHyClRXBnlBDnmoh4zzupZslPI&callback=initMap"></script>

</body>
