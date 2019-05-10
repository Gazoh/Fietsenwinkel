//  -------------------------------------------------------------
// Hier begint de non Custom datatable settings
//  -------------------------------------------------------------
$(document).ready(function () {
    $('#gebruikers').DataTable({
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
        ],

        // Entries
        dom: 'lBfrtip',
        "oLanguage": {
            "sLengthMenu": "_MENU_"
        },
        // Max lengte op 1 pagina
        "pageLength": 16,
        "lengthMenu": [[16, 25, 50, -1], [16, 25, 50, "All"]]
    });
//  -------------------------------------------------------------
//    Hier eindigt de non Custom datatable settings
//  -------------------------------------------------------------

//  -------------------------------------------------------------
//    Hier begint de Custom datatable settings
//  -------------------------------------------------------------
// Append Datatable toevoegen aan een id

    $("#Toevoegen").appendTo("#card-header");
    $('#gebruikers_length').appendTo('#card-header');
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

// Wanneer een column is selected en hij op aanpassen staat dan krijg je alle data te zien van de column
    $('#uitvoeren').on('click', function () {
        if ($('#aanpassen:selected').val() && elementClicked) {
            var oTable = $('#gebruikers').DataTable();
            $('#gebruikers thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                var pos = oTable.row(this).index();
                var row = oTable.row(pos).data();
                console.log(row);
            });
            var oData = oTable.rows('.selected').data();

            for (var i = 0; i < oData.length; i++) {
                console.log("ID: " + oData[i][0]);
                console.log("Voornaam: " + oData[i][1]);
                console.log("Achternaam: " + oData[i][2]);
                console.log("Email: " + oData[i][3]);
                console.log("Telefoonnummer: " + oData[i][4]);
                console.log("Gebruikersnaam: " + oData[i][5]);
                console.log("Wachtwoord: " + oData[i][6]);
                console.log("Rol: " + oData[i][7]);
            }
        }
    });
//  -------------------------------------------------------------
//    Hier Eindigt de Custom datatable settings
//  -------------------------------------------------------------
});