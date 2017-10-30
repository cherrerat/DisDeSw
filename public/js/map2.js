var mapa;
var marker;
var latlgn;
$(document).ready(function(){
    iniciar();
});
/*function iniciar(){
    var infoWindow = new google.maps.InfoWindow({map: mapa});
    crearMapa({lat: -34.397, lng: 150.644});
    if(navigator.geolocation){
       navigator.geolocation.getCurrentPosition(function(position) {
           var pos = {
               lat: position.coords.latitude,
               lng: position.coords.longitude
           };
           infoWindow.setPosition(pos);
           infoWindow.setContent('Location found.');
           mapa.setCenter(pos);
       } ,function(){
           alert("Falla en la toma de posicion")
       });
    }else{
        alert("Browser not supported");
    }
}*/
function iniciar() {
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(success,fail);
    }else{
        alert("No es soportado");
    }
}
function success(position) {
    //console.log(position);
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    latlgn = new google.maps.LatLng(lat, lng)
    crearMapa(latlgn);
}
function fail() {
    crearMapa({lat: -33.447487, lng: -70.673676});
}
function crearMapa(latlng) {
    mapa = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 12
    });
    marker = new google.maps.Marker({
        position: latlng,
        map: mapa
    });
}
function buscarInformacion(bus){
    $.post('http://127.0.0.1:8000/api/buscarInformacion', {bus:bus}, function(match){
        $(".contenedorbusqueda").hide();
        console.log(typeof match)
        //console.log(match);
        var aux = match;
        var newPos = aux.split(",");
        //console.log(newPos[1]);
        var lat = newPos[0].split("{lat: ");
        var lng = newPos[1].split("lng: ");
        lng[1] = lng[1].replace("}","");
        //console.log(lat[1])
        //console.log(lng[1]);
        //crearMapa(newPos);
        newLatLng = new google.maps.LatLng(lat[1],lng[1]);
        crearMapa(newLatLng);
    });
}
$("#buscarBus").click(function(){
    var bus = document.getElementById('datobusqueda').value;
    $(".contenedorBusqueda").hide();
    buscarInformacion(bus);
});