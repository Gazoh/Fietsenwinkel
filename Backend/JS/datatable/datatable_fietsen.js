$(document).ready(function () {
    $('#fietsen').DataTable({
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
            var oTable = $('#fietsen').DataTable();
            $('#fietsen thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                var pos = oTable.row(this).index();
                var row = oTable.row(pos).data();
                console.log(row);
            });

            // Set textbox value's
            var oData = oTable.rows('.selected').data();
            for (let i = 0; i < oData.length; i++) {
                $('#brandInputBijwerken').attr('value', oData[i][3]);
                $('#colorInputBijwerken').attr('value', oData[i][4]);
                $('#framenumberInputBijwerken').attr('value', oData[i][5]);

                // set Beschadigd buttons
                if (oData[i][6] == 'Onbeschadigd') {
                    $('#onbeschadigd').addClass('active');
                } else {
                    $('#beschadigd').addClass('active');
                }
                $('#nameInputBijwerken').attr('value', oData[i][7]);

                if(oData[i][8] == 'Damesfiets') {
                    $('#damesfiets').addClass('active')
                }else  if(oData[i][8] == 'Herenfiets') {
                    $('#herenfiets').addClass('active')
                }else  if(oData[i][8] == 'Kinderfiets') {
                    $('#kinderfiets').addClass('active')
                }


                $('#gearsInputBijwerken').attr('value', oData[i][9]);
                $('#priceInputBijwerken').attr('value', oData[i][10]);
            }
        } else if ($('#bekijken:selected').val() && elementClicked) {
            $("body").load("/fietsenwinkel/Backend/fietsen_bekijken.php");
        } else if ($('#verwijderen:selected').val() && elementClicked) {
            $('#deleteModal').modal('show');
        }

        $('#deleteBike').on('click', function () {
            let oTable = $('#fietsen').DataTable();
            let oData = oTable.rows('.selected').data();
            for (let i = 0; i < oData.length; i++) {
                console.log("ID: " + oData[i][1]);

                $.post("http://localhost/fietsenwinkel/Backend/Controllers/fiets_verwijderen.php?id=" + oData[i][1] + "", function (data) {
                    console.log(data);
                });
                location.reload();
            }
        })
    });

    // Only 1 checkbox can be selected in the form of the bike.
    $('input[type="checkbox"]').on('change', function () {
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });

    // Append Datatable toevoegen aan een id
    $('#fietsen_length').appendTo('#card-header');
    $('#fietsen_filter').appendTo('#card-header');
});