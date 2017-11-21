$(document).ready(function(){
    var aux=document.getElementById('locationCST').value;
    var newPos=aux.split(",");
    var lat = newPos[0].split("{lat: ");
    var lng = newPos[1].split("lng: ");
    lng[1] = lng[1].replace("}","");
    newLatLng = new google.maps.LatLng(lat[1],lng[1]);
    crearMapa(newLatLng);
});