var mapa;
var marker;
var latlgn;
$(document).ready(function(){ //finalizacion de ejecucion de la vista
    iniciar();
});
function iniciar() {
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(success,fail); //Metodo de la API de googleMaps para detectar posicion del usuario
    }else{
        alert("No es soportado");
    }
}
function success(position) { //En caso de exito para la funcion iniciar()
    var lat = position.coords.latitude;
    var lng = position.coords.longitude;
    latlgn = new google.maps.LatLng(lat, lng) //Conversion de los strings con las cordenadas a un formato soportado por la API de googleMaps
    crearMapa(latlgn);
}
function fail() { //En caso de falla para la funcion iniciar()
    crearMapa({lat: -33.447487, lng: -70.673676}); //Coordenadas por defecto entregadas para la creacion de un mapa en la vista
}
function crearMapa(latlng) { //Funcion para crear el mapa de Google en la vista
    mapa = new google.maps.Map(document.getElementById('map'), {
        center: latlng,
        zoom: 12
    });
    marker = new google.maps.Marker({ //Añadir marcador en el mapa
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
        console.log(match);
        if(aux == '')
        {
            alert("Bus no encontrado");  
        }else{
            var newPos = aux.split(",");
            var lat = newPos[0].split("{lat: ");
            var lng = newPos[1].split("lng: ");
            var bus = document.getElementById('datobusqueda').value;
            lng[1] = lng[1].replace("}","");
            newLatLng = new google.maps.LatLng(lat[1],lng[1]);
            $(".contenedorbusqueda").hide();
            $("#Detalle").show();
            crearMapa(newLatLng);
            rellenarDetalles(bus);
        }
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
        //Cambio de datos de los Forms
        $("#nombreChofer").val(nombre);
        $("#runChof").val(run);
        $("#horarioInicio").val(horaI);
        $("#horarioFinal").val(horaF);
        $("#andenDestino").val(anden);
    });
}
//Funcion ejecutada al clickear en el boton del Index "Buscar Bus"
$("#buscarBus").click(function(){
    var bus = document.getElementById('datobusqueda').value;
    bus = bus.toUpperCase();
    buscarInformacion(bus);
});
//Funcion ejecutada al clickear en el boton del Index "Mostrar datos viaje"
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
//Funcion ejecutada al clickear en el boton del Index "Volver a buscar"
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
$("#btnIngresar").click(function(){
    var user=document.getElementById('inputUsername').value;
    var pass=document.getElementById('inputPassword').value;
    var post=[user,pass];
    $.post('http://127.0.0.1:8000/api/');
});