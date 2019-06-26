$(document).ready(function () {
    $('#medewerkers').DataTable({
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

// Wanneer een column is selected en hij op aanpassen staat dan krijg je alle data te zien van de column
    $('#uitvoeren').on('click', function () {
        if ($('#aanpassen:selected').val() && elementClicked) {
            $('#bijwerkenModal').modal('show');
            let oTable = $('#medewerkers').DataTable();
            $('#medewerkers thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                let pos = oTable.row(this).index();
                let row = oTable.row(pos).data();
                console.log(row);
            });
            let oData = oTable.rows('.selected').data();
            for (let i = 0; i < oData.length; i++) {
                $('#firstnameInput').attr('value', oData[i][2]);
                $('#lastnameInput').attr('value', oData[i][3]);
                $('#emailInput').attr('value', oData[i][4]);
                $('#phoneInput').attr('value', oData[i][5]);
                $('#usernameInput').attr('value', oData[i][6]);
                $('#adressInput').attr('value', oData[i][7]);
                $('#cityInput').attr('value', oData[i][8]);
                $('#zipcodeInput').attr('value', oData[i][9]);
            }
        } else if ($('#verwijderen:selected').val() && elementClicked) {
            $('#deleteModal').modal('show');
        } else if ($('#bekijken:selected').val() && elementClicked) {

            $('#bekijkenModal').modal('show');
            let oTable = $('#medewerkers').DataTable();
            $('#medewerkers thead').on('click', 'tr', function () {
                $(this).toggleClass('selected');
                let pos = oTable.row(this).index();
                let row = oTable.row(pos).data();
                console.log(row);
            });
            let oData = oTable.rows('.selected').data();
            for (let i = 0; i < oData.length; i++) {
                $('#firstnameInputBekijken').attr('value', oData[i][2]);
                $('#lastnameInputBekijken').attr('value', oData[i][3]);
                $('#emailInputBekijken').attr('value', oData[i][4]);
                $('#phoneInputBekijken').attr('value', oData[i][5]);
                $('#usernameInputBekijken').attr('value', oData[i][6]);
                $('#adressInputBekijken').attr('value', oData[i][7]);
                $('#cityInputBekijken').attr('value', oData[i][8]);
                $('#zipcodeInputBekijken').attr('value', oData[i][9]);
            }

        }

        $('#deleteMedewerker').on('click', function () {
            var oTable = $('#medewerkers').DataTable();
            var oData = oTable.rows('.selected').data();
            for (var i = 0; i < oData.length; i++) {
                console.log("ID: " + oData[i][1]);

                $.post("http://localhost/fietsenwinkel/Backend/Controllers/medewerker_verwijderen.php?id=" + oData[i][1] + "", function (data) {
                    console.log(data);
                });
                location.reload();
            }
        })

    });

    // Append Datatable toevoegen aan een id
    $('#medewerkers_length').appendTo('#card-header');
    $('#medewerkers_filter').appendTo('#card-header');


});