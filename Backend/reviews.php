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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" type='text/css' media='all'>
    <!-- Material -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <!--  Fonts & Eigen CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="scss/backend.css">
    <!--  Datatable  -->
    <link rel="stylesheet" href="css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!--   Title -->
    <title>Fietsenwinkel - Fietsen</title>
</head>
<body>
<div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebarAnimation">
        <ul class="sidebarUl">
            <div class="sidebarProfilePicture">
                <img src="Assets/img/profile-image-placeholder.png" class="profile-picture">
                <!--   <h5 class="sidebarUsername">Admin</h5>-->
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
                <a class="accordion-toggle collapsed toggle-switch" href="Gebruikers.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-user iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Gebruikers</span>
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
                            <span class="sidebar-icon"><i class="fa fa-times-circle iconwidthBestellingen iconwidth"></i></span>
                            <span class="sidebar-title">Openstaand</span>
                        </div>
                    </a>
                </li>
                <li class="submenu-bestellingenLi afgerond">
                    <a href="bestellingen_openstaand.php">
                        <div class="sidebarData">
                            <span class="sidebar-icon"><i class="fa fa-check iconwidthBestellingen iconwidth"></i></span>
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
            <li class="sidebarLi active">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-star-half-alt iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Reviews</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="nieuwsbrief.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-newspaper iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Nieuwsbrief</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi uitloggen">
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
    <!-- Navbar-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <div class="sidebarChevron">
            <a href="#menu-toggle" id="menu-toggle" class="aSidebarChevron">
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>
        <form class="form-inline">
            <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded">
                <i class="fas fa-user"></i>
                <span class="pr-2"></span>
                <span class="mdc-button__label">Account</span>
            </button>
            <span class="mr-3"></span>
            <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded">
                <i class="fas fa-question"></i>
                <span class="pr-2"></span>
                <span class="mdc-button__label">Help</span>
            </button>
        </form>
    </nav>
    <!--   Datatable -->
    <div class="row gebruikers">
        <div class="card text-black mb-5 mt-5">
            <div class="card-header" id="card-header">
                <button class="toevoegen" id="toevoegen">
                    <span class="pr-1"><i class="fas fa-plus"></i></span>
                    Toevoegen
                </button>
                <div class="selectDatatable">
                    <select class="form-control">
                        <option value="" disabled selected id="opties">Opties</option>
                        <option value="Bekijken" id="bekijken">Bekijken</option>
                        <option value="Verwijderen" id="verwijderen">Verwijderen</option>
                    </select>
                </div>
                <button id="uitvoeren" class="uitvoeren">Uitvoeren</button>
            </div>
            <div id="datatable-card" class="card-body-table">
                <table id="reviews" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Klant ID</th>
                        <th>Beoordeling</th>
                        <th>Datum</th>
                        <th>Zichtbaarheid op website</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td>101</td>
                        <td>Lorem</td>
                        <td>Loremipsum</td>
                        <td>123</td>
                        <td>4 STERREN</td>
                        <td>27-3-2019</td>
                        <td>Zichtbaar</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>101</td>
                        <td>Lorem</td>
                        <td>Loremipsum</td>
                        <td>123</td>
                        <td>5 STERRREN</td>
                        <td>27-3-2019</td>
                        <td>Niet zichtbaar</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Klant ID</th>
                        <th>Beoordeling</th>
                        <th>Datum</th>
                        <th>Zichtbaarheid op website</th>
                    </tr>
                    </tfoot>
                </table>
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
        <script type="text/javascript" src="js/datatable/datatable_reviews.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
        <!-- Side Bar -->
        <script src="js/sidebar.js"></script>
        <!-- Material -->
        <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
        <script src="js/google-material/index.js"></script>
        <script>
            $('#menu-toggle').click(function () {
                if ($(window).width() >= 500) { //your chosen mobile res
                    $('#sidebar-wrapper').toggleClass('clicked');
                    $('.sidebar-title').toggleClass('display');
                    $('.sidebarUsername').toggleClass('display')
                } else {
                    $('#sidebar-wrapper').animate({
                        width: 'toggle'
                    }, 350);
                }
                console.log($('#sidebar-wrapper').innerWidth());
                if ($('#sidebar-wrapper').innerWidth() == 80) {
                    $('.sidebar-title').removeClass('animated fadeIn');
                    $('.sidebar-title').toggleClass('animated fadeIn');
                    $('.sidebarUsername').removeClass('animated fadeIn');
                    $('.sidebarUsername').toggleClass('animated fadeIn');
                }
            });
        </script>
</body>
</html>