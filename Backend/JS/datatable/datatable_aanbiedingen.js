$(document).ready(function () {
    $('#aanbiedingen').DataTable({
        responsive: true,
        "info": false,
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

        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            if (aData[8] == "Actief") {
                $('td:eq(8)', nRow).css('color', '#388E3C');
                $('td:eq(8)', nRow).css('font-family', 'Roboto-Bold');
            } else if (aData[8] == "Niet actief") {
                $('td:eq(8)', nRow).css('color', '#D32F2F');
                $('td:eq(8)', nRow).css('font-family', 'Roboto-Bold');
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
            $('#bijwerkenModal').modal('show');
            $('#aanbiedingen thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                var pos = oTable.row(this).index();
                var row = oTable.row(pos).data();
                console.log(row);
            });
            var oTable = $('#aanbiedingen').DataTable();
            var oData = oTable.rows('.selected').data();
            for (var i = 0; i < oData.length; i++) {
                $('#codeinputAanpassen').attr('value', oData[i][2]);
                $('#amountinputAanpassen').attr('value', oData[i][3]);
                // Als die geldig of ongeldig is maak de button active
                if (oData[i][4] == 'Geldig') {
                    $('#geldig').addClass('active');
                } else if (oData[i][4] == 'Ongeldig') {
                    $('#ongeldig').addClass('active');
                }
                $('#creationdateGeldigvanafInput').attr('value', oData[i][5].substr('', '10'));
                $('#creationdateGeldigtotInput').attr('value', oData[i][6].substr('', '10'));
            }
        } else if ($('#verwijderen:selected').val() && elementClicked) {
            $('#deleteModal').modal('show');
        } else if ($('#bekijken:selected').val() && elementClicked) {
            $('#bekijkenModal').modal('show');
            var oTable = $('#aanbiedingen').DataTable();
            var oData = oTable.rows('.selected').data();
            for (var i = 0; i < oData.length; i++) {
                $('#codeinputBekijken').attr('value', oData[i][2]);
                $('#amountinputBekijken').attr('value', oData[i][3]);
                // Als die geldig of ongeldig is maak de button active
                if (oData[i][4] == 'Geldig') {
                    $('#geldigBekijken').addClass('active');
                } else if (oData[i][4] == 'Ongeldig') {
                    $('#ongeldigBekijken').addClass('active');
                }
                $('#creationdateGeldigvanafInputBekijken').attr('value', oData[i][5].substr('', '10'));
                $('#creationdateGeldigtotInputBekijken').attr('value', oData[i][6].substr('', '10'));
            }

        }


        $('#deleteAanbieding').on('click', function () {
            var oTable = $('#aanbiedingen').DataTable();
            var oData = oTable.rows('.selected').data();
            for (var i = 0; i < oData.length; i++) {
                console.log("ID: " + oData[i][1]);

                $.post("http://localhost/fietsenwinkel/Backend/Controllers/aanbieding_verwijderen.php?id=" + oData[i][1] + "", function (data) {
                });
            }
        })
    });


    // Append Datatable toevoegen aan een id
    $('#aanbiedingen_length').appendTo('#card-header');
    $('#aanbiedingen_filter').appendTo('#card-header');
});