$(document).ready(function () {
    $('#nieuwsbrief').DataTable({
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
            if (aData[6] == "Verzonden") {
                $('td:eq(6)', nRow).css('color', '#388E3C');
                $('td:eq(6)', nRow).css('font-family', 'Roboto-Bold');
            } else if (aData[6] == "In de wacht") {
                $('td:eq(6)', nRow).css('color', '#F57C00');
                $('td:eq(6)', nRow).css('font-family', 'Roboto-Bold');
            } else if (aData[6] == "Concept") {
                $('td:eq(6)', nRow).css('font-family', 'Roboto-Bold');
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
            var oTable = $('#nieuwsbrief').DataTable();
            $('#nieuwsbrief thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                var pos = oTable.row(this).index();
                var row = oTable.row(pos).data();
                console.log(row);
            });
            var oData = oTable.rows('.selected').data();
            for (var i = 0; i < oData.length; i++) {
                $('#emailInputBijwerken').attr('value', oData[i][2]);
            }
        } else if ($('#bekijken:selected').val() && elementClicked) {
            $('#bekijkenModal').modal('show');

            var oTable = $('#nieuwsbrief').DataTable();
            var oData = oTable.rows('.selected').data();
            for (var i = 0; i < oData.length; i++) {
                $('#emailInputBekijken').attr('value', oData[i][2]);
            }
        } else if ($('#verwijderen:selected').val() && elementClicked) {
            $('#deleteModal').modal('show');
        }

        $('#deleteNieuwsbrief').on('click', function () {
            let oTable = $('#nieuwsbrief').DataTable();
            let oData = oTable.rows('.selected').data();
            for (let i = 0; i < oData.length; i++) {
                console.log("ID: " + oData[i][1]);

                $.post("http://localhost/fietsenwinkel/Backend/Controllers/nieuwsbrief_verwijderen.php?id=" + oData[i][1] + "", function (data) {
                    console.log(data);
                });
                location.reload();
            }
        })
    });

    // Append Datatable toevoegen aan een id
    $('#nieuwsbrief_length').appendTo('#card-header');
    $('#nieuwsbrief_filter').appendTo('#card-header');

});