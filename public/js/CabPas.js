$(document).ready(function(){
    $("#mostrarMapa").click(function(){
        $("#datosBusq").hide();
        $("#map").show();
        $("#map").css('height','800px');
        var aux=document.getElementById('viaje_id').value;
        var newPos=aux.split(",");
        var lat = newPos[0].split("{lat: ");
        var lng = newPos[1].split("lng: ");
        lng[1] = lng[1].replace("}","");
        newLatLng = new google.maps.LatLng(lat[1],lng[1]);
        crearMapa(newLatLng);
    });
});