function initMap() {
	
	var location = {
		lat: 23.617928,
		lng: 90.4864331
	};
	
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 14,
		scrollwheel: false,
		center: location,
		styles: [
		  {
			 "elementType": "geometry",
			 "stylers": [
				{
				  "color": "#242f3e"
				}
			 ]
		  },
		  {
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#746855"
				}
			 ]
		  },
		  {
			 "elementType": "labels.text.stroke",
			 "stylers": [
				{
				  "color": "#242f3e"
				}
			 ]
		  },
		  {
			 "featureType": "administrative.locality",
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#d59563"
				}
			 ]
		  },
		  {
			 "featureType": "poi",
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#d59563"
				}
			 ]
		  },
		  {
			 "featureType": "poi.park",
			 "elementType": "geometry",
			 "stylers": [
				{
				  "color": "#263c3f"
				}
			 ]
		  },
		  {
			 "featureType": "poi.park",
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#6b9a76"
				}
			 ]
		  },
		  {
			 "featureType": "road",
			 "elementType": "geometry",
			 "stylers": [
				{
				  "color": "#38414e"
				}
			 ]
		  },
		  {
			 "featureType": "road",
			 "elementType": "geometry.stroke",
			 "stylers": [
				{
				  "color": "#212a37"
				}
			 ]
		  },
		  {
			 "featureType": "road",
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#9ca5b3"
				}
			 ]
		  },
		  {
			 "featureType": "road.highway",
			 "elementType": "geometry",
			 "stylers": [
				{
				  "color": "#746855"
				}
			 ]
		  },
		  {
			 "featureType": "road.highway",
			 "elementType": "geometry.stroke",
			 "stylers": [
				{
				  "color": "#1f2835"
				}
			 ]
		  },
		  {
			 "featureType": "road.highway",
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#f3d19c"
				}
			 ]
		  },
		  {
			 "featureType": "transit",
			 "elementType": "geometry",
			 "stylers": [
				{
				  "color": "#2f3948"
				}
			 ]
		  },
		  {
			 "featureType": "transit.station",
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#d59563"
				}
			 ]
		  },
		  {
			 "featureType": "water",
			 "elementType": "geometry",
			 "stylers": [
				{
				  "color": "#17263c"
				}
			 ]
		  },
		  {
			 "featureType": "water",
			 "elementType": "labels.text.fill",
			 "stylers": [
				{
				  "color": "#515c6d"
				}
			 ]
		  },
		  {
			 "featureType": "water",
			 "elementType": "labels.text.stroke",
			 "stylers": [
				{
				  "color": "#17263c"
				}
			 ]
		  }
		]
	});
	
	var marker = new google.maps.Marker({
		position: location,
		map: map,
		title: 'Md. Abdullah Al Mamun Roni \nFull Stack Web Developer \nmd.aamroni@gmail.com \n+880 1316-440504'
	});
}
