$(document).ready(function(){
   var table = $("#listTrip").DataTable({
        "order": [[ 3,"desc" ]],
        select: true
    });
    $("#listTrip tbody").on('click', 'tr', function(){
        if($(this).hasClass('selected')){
            $(this).removeClass('selected');
        }else{
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });
});