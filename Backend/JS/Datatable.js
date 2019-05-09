//  -------------------------------------------------------------
// Hier begint de non Custom datatable settings
//  -------------------------------------------------------------
$(document).ready(function () {
    $('#gebruikers').DataTable({
        "language": {
            "info": "Gebruikers _START_ tot _END_ van de _TOTAL_ in totaal"
        },
        // Buttons
        dom: 'Bfrtip',
        buttons: [
            {
                text: '<span class="datatableIcon"><i class="fas fa-plus"></i></span>Toevoegen',
                className: 'Toevoegen',
                attr: {
                    id: 'Toevoegen'
                },
                action: function (e, dt, node, config) {
                    alert('Button activated');
                }
            }
        ],
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
        ]
    });
//  -------------------------------------------------------------
//    Hier eindigt de non Custom datatable settings
//  -------------------------------------------------------------

//  -------------------------------------------------------------
//    Hier begint de Custom datatable settings
//  -------------------------------------------------------------

// Append Datatable toevoegen aan een id
    $("#Toevoegen").appendTo("#card-header");
    $('#gebruikers_filter').appendTo('#card-header');


    // De Options voor de 'Verwijderen' & 'Aanpassen'
    $('<div class="selectDatatable">' +
        '<select class="form-control">' +
        '<option value="" disabled selected id="opties">Opties</option>' +
        '<option value="Verwijderen" id="verwijderen">Verwijderen</option>' +
        '<option value="Aanpassen" id="aanpassen">Aanpassen</option>' +
        '</select>' +
        '</div>').appendTo("#card-header");

    // Data ophalen van persoon op de datatabel
    var elementClicked;
    $('td:first-child').on('click', function () {
        elementClicked = true;
    });


    $('#uitvoeren').on('click', function () {
        if ($('#aanpassen:selected').val() && elementClicked) {
            alert('test');
        }
    });


//  -------------------------------------------------------------
//    Hier Eindigt de Custom datatable settings
//  -------------------------------------------------------------
});