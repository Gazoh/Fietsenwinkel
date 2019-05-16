<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <!--  FontAwesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--  Fonts & Eigen CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="scss/backend.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <title>Fietsenwinkel - Dashboard</title>
</head>
<body>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebarAnimation">
        <ul class="sidebarUl">
            <div class="sidebarProfilePicture">
                <img src="Assets/img/profile-image-placeholder.png" class="profile-picture">
                <!--   <h5 class="sidebarUsername">Admin</h5>-->
            </div>
            <li class="sidebarLi active">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
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
                            <span class="sidebar-icon"><i
                                        class="fa fa-times-circle iconwidthBestellingen iconwidth"></i></span>
                            <span class="sidebar-title">Openstaand</span>
                        </div>
                    </a>
                </li>
                <li class="submenu-bestellingenLi afgerond">
                    <a href="bestellingen_afgerond.php">
                        <div class="sidebarData">
                            <span class="sidebar-icon"><i
                                        class="fa fa-check iconwidthBestellingen iconwidth"></i></span>
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
    <!-- End of the navbar -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Collapsed content</h4>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
    </div>
    <div class="container-fluid body">
        <div class="row widgets">
            <div class="col">
                <div class="mdc-card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-users cardWidget"></i>
                            <h1 class="card-title dashboard numbers">31</h1>
                        </div>
                        <h3 class="card-title dashboard">Bezoekers</h3>
                        <p class="card-text">Op dit moment</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-box cardWidget"></i>
                            <h1 class="card-title dashboard numbers">94</h1>
                        </div>
                        <h3 class="card-title dashboard">Bestellingen</h3>
                        <p class="card-text">In de afgelopen week</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-star-half-alt cardWidget"></i>
                            <h1 class="card-title dashboard numbers">16</h1>
                        </div>
                        <h3 class="card-title dashboard">Reviews</h3>
                        <p class="card-text">In de afgelopen week</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-money-bill-wave cardWidget"></i>
                            <h1 class="card-title dashboard numbers">&euro; 6134</h1>
                        </div>
                        <h3 class="card-title dashboard">Netto winst</h3>
                        <p class="card-text">In de afgelopen week</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
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