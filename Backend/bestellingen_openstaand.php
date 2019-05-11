<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--  FontAwesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"
          type='text/css' media='all'>
    <!--  Fonts & Eigen CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="scss/backend.css">
    <!--  Datatable  -->

    <link rel="stylesheet" href="css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
    <!--   Title -->
    <title>Fietsenwinkel - Bestellingen Openstaand</title>
</head>
<body>
<div class="wrapper">
    <!--  Sidebar  -->
    <div id="sidebar">
        <ul class="sidebarUl">
            <div class="sidebarProfilePicture">
                <img src="Assets/img/profile-image-placeholder.png" class="profile-picture">
                <h5 class="sidebarUsername">Admin</h5>
                <p class="adminVersie">v0.0.1</p>
            </div>
            <a href="dashboard.php">
                <li class="sidebarLi">
                    <span class="sidebarIcons"><i class="fas fa-home"></span></i>
                    Home
                </li>
            </a>
            <a href="gebruikers.php">
                <li class="sidebarLi">
                    <span class="sidebarIcons"><i class="fas fa-user"></span></i>
                    Gebruikers
                </li>
            </a>
            <a href="klanten.php">
                <li class="sidebarLi">
                    <span class="sidebarIcons"><i class="fas fa-users"></span></i>
                    Klanten
                </li>
            </a>
            <a>
                <li class="sidebarLi bg-active">
                    <span class="sidebarIcons"><i class="fas fa-box"></span></i>
                    Bestellingen
                    <span class="dropdown-right"><i class="fas fa-caret-right"></i></span>
                </li>
                <a class="dropdown-item sidebarLi dropd active" href="#">Openstaand</a>
                <a class="dropdown-item sidebarLi dropd" href="bestellingen_afgerond.php">Afgerond</a>
            </a>
            <a href="fietsen.php">
                <li class="sidebarLi">
                    <span class="sidebarIcons"><i class="fas fa-bicycle"></span></i>
                    Fietsen
                </li>
            </a>
            <a href="aanbiedingen.php">
                <li class="sidebarLi">
                    <span class="sidebarIcons"><i class="fas fa-tag"></span></i>
                    Aanbiedingen
                </li>
            </a>
            <a href="reviews.php">
                <li class="sidebarLi">
                    <span class="sidebarIcons"><i class="fas fa-star-half-alt"></span></i>
                    Reviews
                </li>
            </a>
            <a href="nieuwsbrief.php">
                <li class="sidebarLi">
                    <span class="sidebarIcons"><i class="fas fa-newspaper"></span></i>
                    Nieuwsbrief
                </li>
            </a>
            <a href="#">
                <li class="sidebarLiUitloggen">
                    <span class="sidebarIcons"><i class="fas fa-sign-out-alt"></i></span></i>
                    Uitloggen
                </li>
            </a>
        </ul>
    </div>
    <!-- Navbar-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <h3 class="logo">Gebruikte Fietsen</h3>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <button class="btn btn-primary nav-buttons ml-4" type="button"><span><i class="fas fa-user"></i></span>Account
            </button>
            <button class="btn btn-primary nav-buttons ml-4" type="button"><span><i class="fas fa-question"></i></span>Help
            </button>
        </form>
    </nav>
    <!--   Datatable -->
    <div class="row gebruikers">
        <div class="card text-black mb-5 mt-5">
            <div class="card-header" id="card-header">
                <div class="selectDatatable">
                    <select class="form-control">
                        <option value="" disabled selected id="opties">Opties</option>
                        <option value="Bekijken" id="bekijken">Bekijken</option>
                        <option value="Betaalverzoek" id="betaalverzoek">Betaalverzoek</option>
                    </select>
                </div>
                <button id="uitvoeren" class="uitvoeren">Uitvoeren</button>
            </div>
            <div id="datatable-card" class="card-body-table">
                <table id="bestellingen" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <td></td>
                        <td>Bestelling</td>
                        <td>Klant ID</td>
                        <td>Besteld</td>
                        <td>Prijs</td>
                        <td>Betaald</td>
                        <td>Betaald met</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td>#124632</td>
                        <td>103</td>
                        <td>13-3-2019</td>
                        <td>&euro; 1028,-</td>
                        <td>17-3-2019</td>
                        <td>Paypal</td>
                        <td>In behandeling</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>#234422</td>
                        <td>723</td>
                        <td>19-3-2019</td>
                        <td>&euro; 9132,-</td>
                        <td>---</td>
                        <td>---</td>
                        <td>Niet Betaald</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>#234422</td>
                        <td>723</td>
                        <td>19-3-2019</td>
                        <td>&euro; 9132,-</td>
                        <td>---</td>
                        <td>---</td>
                        <td>Niet Betaald</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>#234422</td>
                        <td>723</td>
                        <td>19-3-2019</td>
                        <td>&euro; 9132,-</td>
                        <td>---</td>
                        <td>---</td>
                        <td>Niet Betaald</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>#234422</td>
                        <td>723</td>
                        <td>19-3-2019</td>
                        <td>&euro; 9132,-</td>
                        <td>---</td>
                        <td>---</td>
                        <td>Niet Betaald</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>#124632</td>
                        <td>103</td>
                        <td>13-3-2019</td>
                        <td>&euro; 1028,-</td>
                        <td>17-3-2019</td>
                        <td>Paypal</td>
                        <td>In behandeling</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>#124632</td>
                        <td>103</td>
                        <td>13-3-2019</td>
                        <td>&euro; 1028,-</td>
                        <td>17-3-2019</td>
                        <td>Paypal</td>
                        <td>In behandeling</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>#124632</td>
                        <td>103</td>
                        <td>13-3-2019</td>
                        <td>&euro; 1028,-</td>
                        <td>17-3-2019</td>
                        <td>Paypal</td>
                        <td>In behandeling</td>
                    </tr>

                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td>Bestelling</td>
                        <td>Klant ID</td>
                        <td>Besteld</td>
                        <td>Prijs</td>
                        <td>Betaald</td>
                        <td>Betaald met</td>
                        <td>Status</td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <!-- Datatable -->
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
        <script type="text/javascript" src="js/datatable/datatable_bestellingen_openstaand.js"></script>
        <script type="text/javascript" type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
</body>
</html>