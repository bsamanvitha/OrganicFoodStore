<?php require_once("../resources/config.php");
if(isset($_GET['order'])){
  $q = "SELECT *
        FROM orders
        WHERE order_id={$_GET['order']}";
  if($order = $obj_connection->query($q)){
    $row = $order->fetch_assoc();
    $order_address = $row['address'];
  } else {
    $error = $obj_connection->error;
  }
}
?>

<?php include(TEMPLATE_FRONT . DS . "header.php");?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>
<body>
  <div id="map" style="width:75%;height:400px"></div>


  <script>
  var map;
  var route;
  var routeCoords = [];
  var traveledRoute;
  var baseUrl = "http://buyorganics.herokuapp.com/public/orderxml.php?order="
  var warehouse_address = "1271 W El Camino Real, Sunnyvale, CA 94086";
  //var marker;
  function initMap() {
      var directionsService = new google.maps.DirectionsService;
      var directionsDisplay = new google.maps.DirectionsRenderer;
      var distanceService = new google.maps.DistanceMatrixService();
      var geocoder = new google.maps.Geocoder();

      var mapCanvas = document.getElementById("map");
      var mapOptions = {
          center: new google.maps.LatLng(37.5, -121.9),
          zoom: 10
      }
      map = new google.maps.Map(mapCanvas, mapOptions);
      directionsDisplay.setMap(map);
      //calculateAndDisplayRoute(directionsService, directionsDisplay);
      //geocodeAddress(geocoder, map, warehouse_address);
      var xmlUrl = baseUrl+getURLParameter('order');
      downloadUrl(xmlUrl, function(data){
        var xml = data;
        var order_address = $(xml).find("address").text();
        var order_timestamp = $(xml).find("timestamp").text();

        //geocodeAddress(geocoder, map, order_address, null);
        calcRoute(directionsService, directionsDisplay, warehouse_address, order_address).then((route_info) => {
          getDuration(distanceService, warehouse_address, order_address).then((duration) => {
            // have legs and duration and timestamp and currenttime, tracking algorithm can happen!
            console.log(route_info);
            console.log(duration);
            var steps = route_info.legs[0].steps;
            console.log(steps[0].start_location.lat);
            var currentTime = new Date().getTime() / 1000;
            var orderTime = new Date(order_timestamp).getTime() / 1000;
            var image = '../resources/uploads/truck.png';
            var diff = (orderTime + duration.value) - currentTime;
            var progress = (currentTime - orderTime);

            if(diff < 0){
              console.log("reached destination");
              geocodeAddress(geocoder, map, order_address, image);

            } else {
              var currStep;
              var progress_steps = [];
              var j = 0;
              console.log(progress);
              for(var i = 0; i < steps.length; i++){
                if(j < progress){
                  console.log(steps[i].duration);
                  progress_steps.push(steps[i]);
                  j += steps[i].duration.value;
                } else {
                  currStep = google.maps.geometry.encoding.decodePath(steps[i].encoded_lat_lngs)[0];
                  break;
                }
              }
              //place marker at step
              console.log("in transit: " + diff);
              //setMarker(map, currStep, image);
              animate(map, progress_steps, image);
            }
          });
        });

      });


  }

  function geocodeAddress(geocoder, resultsMap, address, image) {
   geocoder.geocode({'address': address}, function(results, status) {
     if (status === 'OK') {
       resultsMap.setCenter(results[0].geometry.location);
       if(image){
         setMarker(resultsMap, results[0].geometry.location, image);
       } else {
         setMarker(resultsMap, results[0].geometry.location);
       }
     } else {
       alert('Geocode was not successful for the following reason: ' + status);
     }
   });
 }

 function setMarker(m, p, i){
   var marker = new google.maps.Marker({
     map: m,
     position: p,
   });
   if(i){
     marker.setIcon(i);
   }
 }

 function calcRoute(directionsService, directionsDisplay, start, end) {
  return new Promise(function (resolve) {
    var request = {
      origin: start,
      destination: end,
      travelMode: 'DRIVING'
    };
    directionsService.route(request, function(result, status) {
      if (status == 'OK') {
        directionsDisplay.setDirections(result);
        //result
        resolve(result.routes[0]);
      }
    });
  });
}

function getDuration(distanceService, warehouse_address, order_address){
  return new Promise(function (resolve){
    distanceService.getDistanceMatrix(
    {
      origins: [warehouse_address],
      destinations:  [order_address],
      travelMode: 'DRIVING',
      avoidHighways: false,
      avoidTolls: false
    },
    function distanceCallback(response, status) {
        if (status == 'OK') {
          var distobj = response.rows[0].elements[0];
          var distance = distobj.distance;
          var duration = distobj.duration;
          resolve(duration);
        } else {
          console.log("you dun messed up");
        }
    });
  });
}



 function downloadUrl(url,callback) {
   var request = new XMLHttpRequest;
   request.open('GET', url, true);
   console.log(url);
   request.onreadystatechange = function() {
     if (request.readyState == 4  && request.status == 200) {
       console.log(request.response);
       callback(request.response);
     }
   };
   request.send(null);
 }

 function getURLParameter(name) {
   return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
 }

 function animate( map, progress_steps, image) {
   var steps = progress_steps;
   var droute = new google.maps.Polyline({
                    path: [],
                    geodesic : true,
                    strokeColor: '#FF0000',
                    strokeOpacity: 0.8,
                    strokeWeight: 3,
                    editable: false,
                    map:map
   });
   var marker = new google.maps.Marker({map:map, icon:image});
   marker.setPosition(steps[0].path[0]);
   var routeCoords = [];
   for (var i = 0; i < steps.length; i++) {
     var path = google.maps.geometry.encoding.decodePath(steps[i].encoded_lat_lngs)[0];
     routeCoords.push(path);
 }
 moveMarker(marker, 0, routeCoords);

  }

  function moveMarker(marker, index, routeCoords) {
      //route.getPath().push(routeCoords[index]);
      marker.setPosition(routeCoords[index]);
      console.log(routeCoords[index]);
      index++;
      if(index < routeCoords.length){
        setTimeout(function(){moveMarker(marker, index, routeCoords);}, 80);
      } else {
        marker.setPosition(routeCoords[routeCoords.length - 1]);
      }
  }



  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiOH1ikwHyClRXBnlBDnmoh4zzupZslPI&callback=initMap"></script>

</body>
