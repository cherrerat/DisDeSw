$(document).ready(function(){
    $('#tablaHistorial').DataTable({
        dom: 'Bfrtip',
        paging: false,
        scrollY: 200,
        autoWidth: true,
        searching: true,    
        buttons: ['excelHtml5', 'csvHtml5', 'pdfHtml5']
    });   
});
