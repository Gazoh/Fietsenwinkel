$(document).ready(function () {
    $('#gebruikers').DataTable({
        responsive: true,
        "info": false,
        // Button
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
            "sLengthMenu": "_MENU_",
            "oPaginate": {
                "sFirst": "Eerste pagina", // This is the link to the first page
                "sPrevious": "Vorige", // This is the link to the previous page
                "sNext": "Volgende", // This is the link to the next page
                "sLast": "Laatste pagina" // This is the link to the last page
            }
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

    // Toevoegen knop actie
    $('#toevoegen').on('click', function () {
        alert('test');
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
                console.log("ID: " + oData[i][1]);
                console.log("Voornaam: " + oData[i][2]);
                console.log("Achternaam: " + oData[i][3]);
                console.log("Email: " + oData[i][4]);
                console.log("Telefoonnummer: " + oData[i][5]);
                console.log("Gebruikersnaam: " + oData[i][6]);
                console.log("Rol: " + oData[i][7]);
            }
        }
    });

    // Append Datatable toevoegen aan een id
    $('#gebruikers_length').appendTo('#card-header');
    $('#gebruikers_filter').appendTo('#card-header');

});