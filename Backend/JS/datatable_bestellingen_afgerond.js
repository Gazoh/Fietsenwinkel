$(document).ready(function () {
    $('#bestellingen').DataTable({
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
        "pageLength": 16,
        "lengthMenu": [[16, 25, 50, -1], [16, 25, 50, "All"]],

        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            if (aData[7] == "Betaald") {
                $('td:eq(7)', nRow).css('color', '#388E3C');
                $('td:eq(7)', nRow).css('font-family', 'Roboto-Bold');
            } else if (aData[7] == "In behandeling") {
                $('td:eq(7)', nRow).css('color', '#F57C00');
                $('td:eq(7)', nRow).css('font-family', 'Roboto-Bold');
            } else if (aData[7] == "Niet Betaald") {
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

// Wanneer een column is selected en hij op aanpassen staat dan krijg je alle data te zien van de column
    $('#uitvoeren').on('click', function () {
        if ($('#aanpassen:selected').val() && elementClicked) {
            var oTable = $('#bestellingen').DataTable();
            $('#bestellingen thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                var pos = oTable.row(this).index();
                var row = oTable.row(pos).data();
                console.log(row);
            });
            var oData = oTable.rows('.selected').data();

            for (var i = 0; i < oData.length; i++) {
                console.log("ID: " + oData[i][1]);
                console.log("Klant ID: " + oData[i][2]);
                console.log("Besteld: " + oData[i][3]);
                console.log("Prijs: " + oData[i][4]);
                console.log("Betaald: " + oData[i][5]);
                console.log("Betaald met: " + oData[i][6]);
                console.log("Status: " + oData[i][7]);
                if (oData[i][7] == "Betaald") {
                    $("td").addClass("betaald");
                }
            }
        }
    });

// Append Datatable toevoegen aan een id
    $('#bestellingen_length').appendTo('#card-header');
    $('#bestellingen_filter').appendTo('#card-header');

});