
$(document).ready(function()
{
	var url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAZKeNzENjHX4nAcELCYKe5MTMZ9bjvi2M&callback=initMap";
	var map;
	$.getScript(url, function(){
		map = new google.maps.Map(document.getElementById('map'),{
		center:{lat:-33.586, lng:-70.714},
		zoom:15
	});
	/*var uluru1 = {lat: -33.586, lng: -70.714};
	var marker = new google.maps.Marker({
		position: uluru1,
		map: map
	});*/
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
	$.ajax({
		type: "post",
		url: window.location.href
	}).done(function(entry){
		//addFocusedMarker is a function to add a Marker and change the map view to center it
		$posicion = google.map.LatLong(entry.ubicacion);
		$maperizer.maperizer('addFocusedMarker', {
			position: posicion,
			map: map
		});
	});
	
});
function handleLocationError(browserHasGeolocation, infoWindow, pos)
{
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeolocation?'Error: The geolocation service failed.': 'Error: Your browser doesnt support geolocation');
}
function addMarker(){
	//
}
