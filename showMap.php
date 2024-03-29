<!DOCTYPE HTML>

<head>
	<title>SHOW MAP</title>
</head>

<style>

html, body, #map-canvas {
    height: 100%;
    width: 100%;
    margin: 0px;
    padding: 0px
}

</style>

<body onload="initMap()">

	<input type="button" id="routebtn" value="route" />
	<div id="map-canvas"></div>




<script>
function mapLocation() {
    var directionsDisplay;
     var directionsService = new google.maps.DirectionsService;
    var map;

    function initMap() {
        directionsDisplay = new google.maps.DirectionsRenderer;

        var chicago = new google.maps.LatLng(18, -70);
        var mapOptions = {
            zoom: 7,
            center: chicago,
            clickableIcons: false
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        directionsDisplay.setMap(map);
        google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
    }

    function calcRoute() {
        var start = new google.maps.LatLng(18.5289,73.8744);
        //var end = new google.maps.LatLng(38.334818, -181.884886);
        var end = new google.maps.LatLng( 18.9696, 72.8194);
        /*
var startMarker = new google.maps.Marker({
            position: start,
            map: map,
            draggable: true
        });
        var endMarker = new google.maps.Marker({
            position: end,
            map: map,
            draggable: true
        });
*/
        var bounds = new google.maps.LatLngBounds();
        bounds.extend(start);
        bounds.extend(end);
        map.fitBounds(bounds);
        var request = {
            origin: start,
            destination: end,
            travelMode: 'TRANSIT',
            transitOptions: {
            modes: ['TRAIN'],
            routingPreference: 'FEWER_TRANSFERS'
  			}
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
                directionsDisplay.setMap(map);
            } else {
                alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
            }
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}
mapLocation();

</script>




<!--<script src="https://maps.googleapis.com/maps/api/js?key=****&libraries=geometry,places,drawing&ext=.js"></script>-->


<script src="https://maps.googleapis.com/maps/api/js?key=****&callback=initMap"
    async defer></script>
</body>
</html>