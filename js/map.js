function initMap() {
   const map = new google.maps.Map(document.getElementById('map'), {
      center: {lat:  44.787197, lng: 20.457273},
      zoom: 6,
      disableDefaultUI: true,
      styles: [
            {
               "elementType": "geometry",
               "stylers": [{"color": "#212121"}]
            },
            {
               "elementType": "labels.icon",
               "stylers": [{"visibility": "off"}]
            },
            {
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#757575"}]
            },
            {
               "elementType": "labels.text.stroke",
               "stylers": [{"color": "#212121"}]
            },
            {
               "featureType": "administrative",
               "elementType": "geometry",
               "stylers": [{"color": "#757575"}]
            },
            {
               "featureType": "administrative.country",
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#9e9e9e"}]
            },
            {
               "featureType": "administrative.land_parcel",
               "stylers": [{"visibility": "off"}]
            },
            {
               "featureType": "administrative.locality",
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#bdbdbd"}]
            },
            {
               "featureType": "administrative.neighborhood",
               "stylers": [{"visibility": "off"}]
            },
            {
               "featureType": "poi",
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#757575"}]
            },
            {
               "featureType": "poi.business",
               "stylers": [{"visibility": "off"}]
            },
            {
               "featureType": "poi.park",
               "elementType": "geometry",
               "stylers": [{"color": "#181818"}]
            },
            {
               "featureType": "poi.park",
               "elementType": "labels.text",
               "stylers": [{"visibility": "off"}]
            },
            {
               "featureType": "poi.park",
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#616161"}]
            },
            {
               "featureType": "poi.park",
               "elementType": "labels.text.stroke",
               "stylers": [{"color": "#1b1b1b"}]
            },
            {
               "featureType": "road",
               "stylers": [{"visibility": "on"}]
            },
            {
               "featureType": "road",
               "elementType": "geometry.fill",
               "stylers": [{"color": "#2c2c2c"}]
            },
            {
               "featureType": "road",
               "elementType": "labels",
               "stylers": [{"visibility": "off"}]
            },
            {
               "featureType": "road",
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#8a8a8a"}]
            },
            {
               "featureType": "road.arterial",
               "elementType": "geometry",
               "stylers": [{"color": "#373737"}]
            },
            {
               "featureType": "transit",
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#757575"}]
            },
            {
               "featureType": "water",
               "elementType": "geometry",
               "stylers": [{"color": "#000000"}]
            },
            {
               "featureType": "water",
               "elementType": "labels.text",
               "stylers": [{"visibility": "off"}]
            },
            {
               "featureType": "water",
               "elementType": "labels.text.fill",
               "stylers": [{"color": "#3d3d3d"}]
            }
         ]
   });

   const marker = new google.maps.Marker({
      position: {lat: 44.27513, lng: 19.89821},
      map: map
   });

   const infoWindow = new google.maps.InfoWindow({
      content: '<h2>Valjevo<h2>'
   })
   marker.addListener('click', function(){
      infoWindow.open(map, marker)
   });
}