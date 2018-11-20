// Call the dataTables jQuery plugin



$(document).ready(function() {
    $('#dataTable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ], "paging":   false,
         "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
} );
