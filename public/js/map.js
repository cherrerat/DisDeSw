
$(document).ready(function()
{
	var url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAZKeNzENjHX4nAcELCYKe5MTMZ9bjvi2M&callback=initMap";
	var map;
	$.getScript(url, function(){
		map = new google.maps.Map(document.getElementById('map'),{
		center:{lat:-33.586, lng:-70.714},
		zoom:15
	});
	var infoWindow = new google.maps.InfoWindow({map: map});
	if(navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(function(position){
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};
			infoWindow.setPosition(pos);
			infoWindow.setContent('Location found.');
			map.setCenter(pos);
		}, function(){
			handleLocationError(true, infoWindow, map.getCenter());
		});
	}else{
		handleLocationError(false, infoWindow, map.getCenter());
	}
	});
	google.maps.event.trigger(map, 'resize');
});
function addMap(lat) {
	var url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAZKeNzENjHX4nAcELCYKe5MTMZ9bjvi2M&callback=initMap";
	var map;
	$.getScript(url, function(){
		map = new google.maps.Map(document.getElementById('map'),{
		center: lat,
		zoom:15
	});
	var infoWindow = new google.maps.InfoWindow({map: map});
	if(navigator.geolocation)
	{
		navigator.geolocation.getCurrentPosition(function(position){
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};
			infoWindow.setPosition(pos);
			infoWindow.setContent('Location found.');
			map.setCenter(pos);
		}, function(){
			handleLocationError(true, infoWindow, map.getCenter());
		});
	}else{
		handleLocationError(false, infoWindow, map.getCenter());
	}
	});
	google.maps.event.trigger(map, 'resize');
}
function addMarker(lat){
	var url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAZKeNzENjHX4nAcELCYKe5MTMZ9bjvi2M&callback=initMap";
	$.getScript(url, function(){
		$.ajax({
			type: "post",
			url: './index'
		}).done(function(entry){
			//addFocusedMarker is a function to add a Marker and change the map view to center it
			$posicion = google.map.LatLong(entry.ubicacion);
			$maperizer.maperizer('addFocusedMarker', {
				position: lat,
				map: map
			});
		});
	});
}

$("#buscarBus").click(function(){
	alert(coord);
	//addMap(coord);
	addMarker(coord);
});