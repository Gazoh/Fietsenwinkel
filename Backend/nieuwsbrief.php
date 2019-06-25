<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet"
    <!--  FontAwesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" type='text/css' media='all'>
    <!--  Fonts & Eigen CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="scss/backend.css">
    <!--  Datatable  -->
    <link rel="stylesheet" href="css/Datatable/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/Datatable/datatables.min.css"/>
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/Animate/animate.css">
    <!--   Title -->
    <title>Fietsenwinkel - Fietsen</title>
</head>
<body>
<div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebarAnimation">
        <ul class="sidebarUl">
            <div class="sidebarProfilePicture pl-4 pr-4" id="sidebarProfilePicture">
                <span class="logo sidebarUsername">FW</span>
                <a href="#menu-toggle" id="menu-toggle" class="aSidebarChevron float-right">
                    <i class="fas fa-chevron-left" id="chevron"></i>
                </a>
            </div>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="Dashboard.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-home iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Home</span>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="medewerkers.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-user iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Medewerkers</span>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="Klanten.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-user-tie iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Klanten</span>
                    </div>
                </a>
            </li>
            <li class="sidebarLi" id="bestellingen" data-toggle="collapse" href="#submenu-2">
                <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fa fa-box iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Bestellingen</span>
                    </div>
                </a>
            </li>
            <ul id="submenu-2" class="panel-collapse collapse panel-switch submenu-bestellingenUl" role="menu">
                <li class="submenu-bestellingenLi openstaand">
                    <a href="bestellingen_openstaand.php">
                        <div class="sidebarData">
                            <span class="sidebar-icon pr-2"><i class="fa fa-times-circle iconwidthBestellingen iconwidth"></i></span>
                            <span class="sidebar-title">Openstaand</span>
                        </div>
                    </a>
                </li>
                <li class="submenu-bestellingenLi afgerond">
                    <a href="bestellingen_afgerond.php">
                        <div class="sidebarData">
                            <span class="sidebar-icon pr-2"><i class="fa fa-check iconwidthBestellingen iconwidth"></i></span>
                            <span class="sidebar-title">Afgerond</span>
                        </div>
                    </a>
                </li>
            </ul>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="fietsen.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fa fa-bicycle iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Fietsen</span>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="aanbiedingen.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-tag iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Aanbiedingen</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="reviews.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-star-half-alt iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Reviews</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi active">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-newspaper iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Nieuwsbrief</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-sign-out-alt iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Uitloggen</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!--   Hier eindigt de Not minified sidebar-->
    <nav class="navbar navbar-light bg-light mr-auto nav" id="nav">
        <div class="justify-content-end">
            <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded account">
                <i class="fas fa-user"></i>
                <span class="pr-2"></span>
                <span class="mdc-button__label">Account</span>
            </button>
            <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded help">
                <i class="fas fa-question"></i>
                <span class="pr-2"></span>
                <span class="mdc-button__label">Help</span>
            </button>
        </div>
        <div class="mdc-chip-set pl-2 pr-2">
            <div class="hiUser pr-1 pt-2">
                <span class="hiNav">Hi, </span>
                <span class="usernameNav" id="usernameNav"></span>
            </div>
            <div class="mdc-chip" tabindex="0">
                <div class="mdc-chip__text usernameFirstLetter" id="usernameFirstLetter"></div>
            </div>
        </div>
    </nav>
    <!-- End of the navbar -->
    <!--   Datatable -->
    <div class="row gebruikers">
        <div class="card text-black mb-5 mt-5">
            <div class="card-header" id="card-header">
                <div class="selectDatatable mdc-button__label">
                    <select class="form-control">
                        <option value="" disabled selected id="opties">Opties</option>
                        <option value="Bekijken" id="bekijken">Bekijken</option>
                        <option value="Aanpassen" id="aanpassen">Aanpassen</option>
                        <option value="Verwijderen" id="verwijderen">Verwijderen</option>
                    </select>
                </div>
                <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded uitvoeren" id="uitvoeren">
                    <span class="mdc-button__label">Uitvoeren</span>
                </button>
            </div>
            <div id="datatable-card" class="card-body-table">
                <table id="nieuwsbrief" class="table-card" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Titel</th>
                        <th>Onderwerp</th>
                        <th>Ontvangers</th>
                        <th>Verzonden</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td>210</td>
                        <td>Lorem ipsum</td>
                        <td>Duis condimentum</td>
                        <td>314</td>
                        <td>---</td>
                        <td>In de wacht</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>210</td>
                        <td>Lorem ipsum</td>
                        <td>Duis condimentum</td>
                        <td>314</td>
                        <td>--</td>
                        <td>Concept</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>210</td>
                        <td>Lorem ipsum</td>
                        <td>Duis condimentum</td>
                        <td>314</td>
                        <td>13-3-2019</td>
                        <td>Verzonden</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Titel</th>
                        <th>Onderwerp</th>
                        <th>Ontvangers</th>
                        <th>Verzonden</th>
                        <th>Status</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Datatable -->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="JS/datatable/datatable_nieuwsbrief.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
    <!-- Sidebar & Nav -->
    <script src="JS/sidebar.js"></script>
    <script src="JS/nav.js"></script>
    <!-- Material -->
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <script src="JS/google-material/index.js"></script>
</body>
</html>