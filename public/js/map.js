
$(document).ready(function()
{
	var url = "https://maps.googleapis.com/maps/api/js?key=AIzaSyAZKeNzENjHX4nAcELCYKe5MTMZ9bjvi2M&callback=initMap";
	$.getScript(url, function(){
		var map = new google.maps.Map(document.getElementById('map'),{
		center:{lat:-34.397, lng:150.644},
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
});
function handleLocationError(browserHasGeolocation, infoWindow, pos)
{
	infoWindow.setPosition(pos);
	infoWindow.setContent(browserHasGeolocation?'Error: The geolocation service failed.': 'Error: Your browser doesnt support geolocation');
}
