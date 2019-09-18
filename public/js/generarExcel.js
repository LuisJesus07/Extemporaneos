$(document).ready(function() {
    $('#tabla').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    } );
} );