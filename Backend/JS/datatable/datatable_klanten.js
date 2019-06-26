$(document).ready(function () {
    $('#klanten').DataTable({
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
    });

    // Data ophalen van persoon op de datatabel
    let elementClicked;
    $('td:first-child').on('click', function () {
        elementClicked = true;
    });

    // Wanneer een column is selected en hij op aanpassen staat dan krijg je alle data te zien van de column
    $('#uitvoeren').on('click', function () {
        if ($('#aanpassen:selected').val() && elementClicked) {
            $('#aanpassenModal').modal('show');
            let oTable = $('#klanten').DataTable();
            $('#klanten thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                let pos = oTable.row(this).index();
                let row = oTable.row(pos).data();
                console.log(row);
            });
            let oData = oTable.rows('.selected').data();

            for (let i = 0; i < oData.length; i++) {
                $('#firstnameInputBijwerken').attr('value', oData[i][2]);
                $('#lastnameInputBijwerken').attr('value', oData[i][3]);
                $('#emailInputBijwerken').attr('value', oData[i][4]);
                $('#phoneInputBijwerken').attr('value', oData[i][5]);
                $('#adressInputBijwerken').attr('value', oData[i][6]);
                $('#cityInputBijwerken').attr('value', oData[i][7]);
                $('#zipcodeInputBijwerken').attr('value', oData[i][8]);
            }
        } else if ($('#verwijderen:selected').val() && elementClicked) {
            $('#deleteModal').modal('show');
        } else if ($('#bekijken:selected').val() && elementClicked) {
            $('#bekijkenModal').modal('show');

            let oTable = $('#klanten').DataTable();
            let oData = oTable.rows('.selected').data();

            for (let i = 0; i < oData.length; i++) {
                $('#firstnameInputBekijken').attr('value', oData[i][2]);
                $('#lastnameInputBekijken').attr('value', oData[i][3]);
                $('#emailInputBekijken').attr('value', oData[i][4]);
                $('#phoneInputBekijken').attr('value', oData[i][5]);
                $('#adressInputBekijken').attr('value', oData[i][6]);
                $('#cityInputBekijken').attr('value', oData[i][7]);
                $('#zipcodeInputBekijken').attr('value', oData[i][8]);
            }
        }

        $('#deleteKlant').on('click', function () {
            let oTable = $('#klanten').DataTable();
            let oData = oTable.rows('.selected').data();
            for (let i = 0; i < oData.length; i++) {
                console.log("ID: " + oData[i][1]);

                $.post("http://localhost/fietsenwinkel/Backend/Controllers/klant_verwijderen.php?id=" + oData[i][1] + "", function (data) {
                    console.log(data);
                });
                location.reload();
            }
        })

    });


    // Append Datatable toevoegen aan een id
    $('#klanten_length').appendTo('#card-header');
    $('#klanten_filter').appendTo('#card-header');
});