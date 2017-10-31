var mapa;
var marker;
var latlgn;
$(document).ready(function(){
    iniciar();
});
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
    //     URL del post para mandar la info al controller, array que le manda al parametro de la funcion,
    //                                                    {parametro:data}
    //                                                                  match seria el retorno del controller
    $.post('http://127.0.0.1:8000/api/buscarInformacion', {bus:bus}, function(match){
        var aux = match;
        var newPos = aux.split(",");
        var lat = newPos[0].split("{lat: ");
        var lng = newPos[1].split("lng: ");
        lng[1] = lng[1].replace("}","");
        newLatLng = new google.maps.LatLng(lat[1],lng[1]);
        crearMapa(newLatLng);
    });
}
function rellenarDetalles(bus){

    $.post('http://127.0.0.1:8000/api/llenarDetalles', {bus:bus}, function(match){
        console.log(match);
        var nombre = match.nombreChofer;
        var run = match.rutChofer;
        var anden = match.anden;
        var horaF = match.horaF;
        var horaI = match.horaI;
        $("#nombreChofer").val(nombre);
        $("#runChof").val(run);
        $("#horarioInicio").val(horaI);
        $("#horarioFinal").val(horaF);
        $("#andenDestino").val(anden);
    });
}
$("#buscarBus").click(function(){
    var bus = document.getElementById('datobusqueda').value;
    $(".contenedorbusqueda").hide();
    $("#Detalle").show();
    buscarInformacion(bus);
    rellenarDetalles(bus);
});
$("#Detalle").click(function(){
    var a = document.getElementById('box-datos')
    if($("#box-datos").css('display') == 'none'){
        $("#box-datos").slideDown();
        $("#Detalle").text('Ocultar datos viaje')
    }else{
        $("#box-datos").slideUp();
        $("#Detalle").text('Mostrar datos viaje')
    }
});
$("#btnVolver").click(function(){
    $(".contenedorbusqueda").show();
    $("#datobusqueda").val(null);
    $("#nombreChofer").val(null);
    $("#runChof").val(null);
    $("#horarioInicio").val(null);
    $("#horarioFinal").val(null);
    $("#andenDestino").val(null);
    $("#box-datos").hide();
    $("#Detalle").hide();
});