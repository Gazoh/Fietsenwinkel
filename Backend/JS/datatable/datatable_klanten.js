$(document).ready(function () {
    $('#klanten').DataTable({
        responsive: true,
        // Kunnen selecteren van een persoon
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [[1, 'asc']
        ],
        // Entries
        "oLanguage": {
            "sLengthMenu": "_MENU_"
        },
        // Max lengte op 1 pagina
        "pageLength": 10,
        "lengthMenu": [[10, 25, 50], [10, 25, 50]],
    });

    // Data ophalen van persoon op de datatabel
    var elementClicked;
    $('td:first-child').on('click', function () {
        elementClicked = true;
    });

    // Append Datatable toevoegen aan een id
    $('#klanten_length').appendTo('#card-header');
    $('#klanten_filter').appendTo('#card-header');
});