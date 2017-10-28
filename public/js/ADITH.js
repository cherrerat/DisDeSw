$(document).ready(function(){
    $("#itTerminal").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf'
        ],
        order:[[ 0,'asc' ]]
    });
});