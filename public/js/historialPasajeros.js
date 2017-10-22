$(document).ready(function(){
    $('#tablaHistorial').DataTable({
        dom: 'Bfrtip',
        paging: false,
        scrollY: 200,
        autoWidth: true,
        searching: true,    
        buttons: [
            {
                extends: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o fa-3x"></i>',
                titleAttr: 'Excel'
            }, 
            {
                extendds: 'pdfHtml5',
                text: '<i class="fa fa-file-pdf-o fa-3x "></i>',
                titleAttr: 'PDF'
            }
        ]
    });   
});
