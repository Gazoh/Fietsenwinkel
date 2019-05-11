$(document).ready(function () {
    $('#reviews').DataTable({
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

        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            if (aData[7] == "Zichtbaar") {
                $('td:eq(7)', nRow).css('color', '#388E3C');
                $('td:eq(7)', nRow).css('font-family', 'Roboto-Bold');
            } else if (aData[7] == "Niet zichtbaar") {
                $('td:eq(7)', nRow).css('color', '#D32F2F');
                $('td:eq(7)', nRow).css('font-family', 'Roboto-Bold');
            }
        }
    });


    // Data ophalen van persoon op de datatabel
    var elementClicked;
    $('td:first-child').on('click', function () {
        elementClicked = true;
    });

    // Toevoegen knop actie
    $('#toevoegen').on('click', function () {
        alert('test');
    });

    // Append Datatable toevoegen aan een id
    $('#reviews_length').appendTo('#card-header');
    $('#reviews_filter').appendTo('#card-header');

});