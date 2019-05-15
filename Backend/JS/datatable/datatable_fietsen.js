$(document).ready(function () {
    $('#fietsen').DataTable({
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

// Wanneer een column is selected en hij op aanpassen staat dan krijg je alle data te zien van de column
    $('#uitvoeren').on('click', function () {
        if ($('#aanpassen:selected').val() && elementClicked) {
            var oTable = $('#fietsen').DataTable();
            $('#fietsen thead').on('click', 'tr', function () {
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
                console.log("Adres: " + oData[i][6]);

            }
        }
    });

    // Toevoegen knop actie
    $('#toevoegen').on('click', function () {
        alert('test');
    });

    // Append Datatable toevoegen aan een id
    $('#fietsen_length').appendTo('#card-header');
    $('#fietsen_filter').appendTo('#card-header');
});