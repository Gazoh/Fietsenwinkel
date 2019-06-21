<?php
session_start();
if (!isset($_SESSION['first_name'])) {
    $_SESSION['first_name'] = "";
}
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Material.io -->
    <link href="css/Material/material-components-web.min.css" rel="stylesheet">
    <!-- Eigen CSS-->
    <link rel="stylesheet" href="scss/style.css">
    <!--  FontAwesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    =integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" type='
     text/css' media='all'>
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/Animate/animate.css"/>
    <title>Heren Fietsen</title>
</head>
<body>
<div class="container-fluid">
    <!--  Nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img class="image" src="assets/img/logo.png" width="" alt="logo">
        </a>
        <div id="navbar-buttons">
            <button class="foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account navbar-toggler"
                    type="button" id="header-list" data-toggle="modal" data-target="#mobileFilter">
                <i class="fas fa-list fontSize1-2rem"></i>
            </button>
            <button class="foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account navbar-toggler"
                    type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars fontSize1-2rem"></i>
            </button>
            <button class="foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account navbar-toggler"
                    type="button"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-user fontSize1-2rem"></i>
            </button>
            <button class="foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account navbar-toggler"
                    type="button"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-shopping-bag fontSize1-2rem"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="damesfietsen.php">Damesfietsen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="herenfietsen.php">Herenfietsen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kinderfietsen.php">Kinderfietsen</a>
                </li>
            </ul>
            <!-- Nav Buttons / Shopping cart -->
            <div class="navbar-buttons-top" id="navbar-buttons-top">
                <button class="foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account mr-2"
                        data-toggle="modal" data-target="#accountModal">
                    <i class="fas fa-user"></i>
                    <span class="pr-2"></span>
                    <?php if ($_SESSION['first_name'] != "") {
                        echo "<span class=\"mdc-button__label\">";
                        echo $_SESSION['first_name'];
                        echo "</span>";
                    } elseif (!isset($_SESSION["first_name"]) || $_SESSION['first_name'] == "") {
                        echo "<span class='mdc-button__label rRoboto'>Account</span>";
                    } ?>
                </button>
                <div class="dropdown float-right">
                    <button class="foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account"
                            type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="fas fa-shopping-bag fontSize1rem"></i>
                    </button>
                    <div class="dropdown-menu p-4" id="dropdown" aria-labelledby="dropdownMenuButton">
                        <div class="order">
                            <div class="float-left pt-4">
                                <i class="fas fa-times pr-4"></i>
                            </div>
                            <img src="assets/img/bike.png" width="60">
                            <div class="float-right">
                                <div class="m-0 pt-3 bRoboto">Lorem Ipsum Text</div>
                                <div class="m-0 text-right shopping-bedrag font-weight-normal">&euro; 1879,-</div>
                            </div>
                        </div>
                        <hr>
                        <div class="order">
                            <div class="float-left pt-4">
                                <i class="fas fa-times pr-4"></i>
                            </div>
                            <img src="assets/img/bike.png" width="60">
                            <div class="float-right">
                                <div class="m-0 pt-3 bRoboto">Lorem Ipsum Text</div>
                                <div class="m-0 text-right shopping-bedrag font-weight-normal">&euro; 1879,-</div>
                            </div>
                        </div>
                        <hr>
                        <div class="pt-1 text-center bRoboto" id="totaalbedrag">
                            <p>&euro; 3758,-</p>
                        </div>
                        <hr>
                        <p class="text-center">2 Artikelen in winkelwagen</p>
                        <a href="winkelwagen.php">
                            <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account w-100 bRoboto"
                                    type="button" id="bestellenDropdown">
                                Bestellen
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Alert -->
    <div class="alert bg-light" role="alert" id="alert">
        <div class="text-black">
            <div>
                <div class="float-left mr-3">
                    <span class="bRoboto">Ruim assortiment</span> met de beste A merken
                </div>
                <div class="float-left mr-3">
                    Tot <span class="bRoboto">14 dagen</span> ruilen en retourneren
                </div>
                <div class="float-left gratisVerzenden mr-3">
                    <span class="bRoboto">Gratis verzenden</span>
                </div>
                <div class="float-right main-color gebruikteFiets">
                    <span class="bRoboto">Op een gebruikte fiets moet je het leren!</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Winkelwagen -->
    <div id="winkelwagen">
        <p class="h1 d-flex justify-content-center mt-4 bRoboto">Winkel wagen</p>
        <hr class="w-50">
        <div class="row p-2 bg-light w-100 m-0 justify-content-center">
            <div class="col-xl-2 float-right">
                <img src="assets/img/bike_detail.png" class="float-left winkelwagen-image">
                <p class="bRoboto d-block justify-content-center text-center m-0">Berenfiets kaas</p>
                <p class="main-color-light d-block justify-content-center text-center">Onbeschadigd</p>
            </div>
            <div class="vr my-auto"></div>
            <div class="brand pl-5 pr-5 h-100 my-auto">
                <p class="iRoboto m-0 text-center">Merk</p>
                <p class="bRoboto text-center">Gazelle</p>
            </div>
            <div class="vr my-auto"></div>
            <div class="brand pl-5 pr-5 h-100 my-auto">
                <p class="iRoboto m-0 text-center">Color</p>
                <p class="bRoboto text-center">Black</p>
            </div>
            <div class="vr my-auto"></div>
            <div class="brand pl-5 pr-5 h-100 my-auto">
                <p class="iRoboto m-0 text-center">Framenummer</p>
                <p class="bRoboto text-center">GZ0316026</p>
            </div>
            <div class="vr my-auto"></div>
            <div class="brand pl-5 pr-5 h-100 my-auto">
                <p class="iRoboto m-0 text-center">Versnellingen</p>
                <p class="bRoboto text-center   ">7</p>
            </div>
            <div class="vr my-auto"></div>
            <div class="brand pl-5 pr-5 h-100 my-auto">
                <p class="iRoboto m-0 text-center">Prijs</p>
                <p class="bRoboto text-center main-color-light">&euro; 745,-</p>
            </div>
            <div class="vr my-auto"></div>
            <div class="brand pl-5 pr-5 h-100 my-auto">
                <button class="foo-button mdc-button mdc-button--label mdc-ripple-upgraded account navbar-toggler mr-1"
                        type="submit" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation" data-dismiss="modal" data-toggle="modal"
                        data-target="#registreerModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
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
<!-- Material.io -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="js/material/material.js"></script>
<!-- Main -->
<script type="text/javascript" src="js/Main.js"></script>
</body>
</html>