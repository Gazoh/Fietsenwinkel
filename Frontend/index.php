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
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <!-- Material.io -->
    <link href="css/Material/material-components-web.min.css" rel="stylesheet">
    <!-- Eigen CSS-->
    <link rel="stylesheet" href="scss/style.css">
    <!--  FontAwesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    =integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" type='
    text/css' media='all'>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <title>Gebruikte fietsen</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Damesfietsen.php">Damesfietsen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Herenfietsen.php">Herenfietsen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kinderfietsen.php">Kinderfietsen</a>
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
    <!-- Full Image Width -->
    <div class="image-responsive text-center">
        <h1 class="text-white full-image bRoboto">Bekijk hier onze dag aanbiedingen</h1>
        <p class="text-white full-image bespaar light">Bespaar tot wel 20%</p>
        <div class="full-image">
            <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded account mt-4 bRoboto"
                    type="button">
                Dagaanbiedingen
            </button>
        </div>
    </div>
    <!-- Nieuwe Collectie -->
    <div class="p-5" id="nieuwe-collectie">
        <h1 class="text-center main-color h2 bRoboto">Nieuwe Collectie</h1>
        <div class="slick-buttons"></div>
        <div class="slick-slider">
            <div>
                <img class="w-100" src="assets/img/bike.png" alt="fiets">
                <p class="m-0">Lorem ipsum adiscing elit ligula</p>
                <p class="main-color-light mb-2 bRoboto">Onbeschadigd</p>
                <div>
                    <p class="oudeprijs main-color font-italic m-1">&euro; 1276,-</p>
                    <p class="prijs main-color h3 bRoboto">&euro; 1087,-</p>
                </div>
            </div>
            <div>
                <img class="w-100" src="assets/img/bike.png" alt="fiets">
                <p class="m-0">Lorem ipsum adiscing elit ligula</p>
                <p class="main-color-light mb-2 bRoboto">Onbeschadigd</p>
                <div>
                    <p class="oudeprijs main-color font-italic m-1">&euro; 1276,-</p>
                    <p class="prijs main-color h3 bRoboto">&euro; 1087,-</p>
                </div>
            </div>
            <div>
                <img class="w-100" src="assets/img/bike.png" alt="fiets">
                <p class="m-0">Lorem ipsum adiscing elit ligula</p>
                <p class="main-color-light mb-2 bRoboto">Onbeschadigd</p>
                <div>
                    <p class="oudeprijs main-color font-italic m-1">&euro; 1276,-</p>
                    <p class="prijs main-color h3 bRoboto">&euro; 1087,-</p>
                </div>
            </div>
            <div>
                <img class="w-100" src="assets/img/bike.png" alt="fiets">
                <p class="m-0">Lorem ipsum adiscing elit ligula</p>
                <p class="main-color-light mb-2 bRoboto">Onbeschadigd</p>
                <div>
                    <p class="oudeprijs main-color font-italic m-1">&euro; 1276,-</p>
                    <p class="prijs main-color h3 bRoboto">&euro; 1087,-</p>
                </div>
            </div>
            <div>
                <img class="w-100" src="assets/img/bike.png" alt="fiets">
                <p class="m-0">Lorem ipsum adiscing elit ligula</p>
                <p class="main-color-light mb-2 bRoboto">Onbeschadigd</p>
                <div>
                    <p class="oudeprijs main-color font-italic m-1">&euro; 1276,-</p>
                    <p class="prijs main-color h3 bRoboto">&euro; 1087,-</p>
                </div>
            </div>
            <div>
                <img class="w-100" src="assets/img/bike.png" alt="fiets">
                <p class="m-0">Lorem ipsum adiscing elit ligula</p>
                <p class="main-color-light mb-2 bRoboto">Onbeschadigd</p>
                <div>
                    <p class="oudeprijs main-color font-italic m-1">&euro; 1276,-</p>
                    <p class="prijs main-color h3 bRoboto">&euro; 1087,-</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Review -->
    <div class="p-5" id="review">
        <h1 class="text-center text-white h2 bRoboto">Vele gingen u al voor</h1>
        <div class="row pt-4">
            <div class="col-lg-4 review">
                <div class="star">
                    <img class="float-right" src="assets/img/4_sterren.png" alt="sterren">
                </div>
                <h1 class="h3 m-0 text-white">Lorem Ipsum</h1>
                <p class="datum text-white">XX-XX-XXXX</p>
                <p class="review-persoon text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                    ultrices diam
                    non erat maximus, maximus dapibus magna suscipit. Maecenas at pharetra augue. Nam
                    euismod
                    consectetur nibh, et lacinia enim tincidunt eget. Fusce tincidunt elit facilisis dolor auctor
                    tempus. Sed tristique efficitur accumsan. Suspendisse ante tortor, porta non purus
                    sed,
                    ornare finibus sapien. Curabitur bibendum gravida nisi, vel varius dui aliquam eget.</p>
            </div>
            <div class="col-lg-4 review">
                <div class="star">
                    <img class="float-right" src="assets/img/5_sterren.png" alt="sterren">
                </div>
                <h1 class="h3 m-0 text-white">Lorem Ipsum</h1>
                <p class="datum text-white">XX-XX-XXXX</p>
                <p class="review-persoon text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                    ultrices diam
                    non erat maximus, maximus dapibus magna suscipit. Maecenas at pharetra augue. Nam
                    euismod
                    consectetur nibh, et lacinia enim tincidunt eget. Fusce tincidunt elit facilisis dolor auctor
                    tempus. Sed tristique efficitur accumsan. Suspendisse ante tortor, porta non purus
                    sed,
                    ornare finibus sapien. Curabitur bibendum gravida nisi, vel varius dui aliquam eget.</p>
            </div>
            <div class="col-lg-4 review">
                <div class="star">
                    <img class="float-right" src="assets/img/3_sterren.png" alt="sterren">
                </div>
                <h1 class="h3 m-0 text-white">Lorem Ipsum</h1>
                <p class="datum text-white">XX-XX-XXXX</p>
                <p class="review-persoon text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                    ultrices diam
                    non erat maximus, maximus dapibus magna suscipit. Maecenas at pharetra augue. Nam
                    euismod
                    consectetur nibh, et lacinia enim tincidunt eget. Fusce tincidunt elit facilisis dolor auctor
                    tempus. Sed tristique efficitur accumsan. Suspendisse ante tortor, porta non purus
                    sed,
                    ornare finibus sapien. Curabitur bibendum gravida nisi, vel varius dui aliquam eget.</p>
            </div>
        </div>
    </div>
    <!-- Nieuwsbrief -->
    <div class="p-5" id="nieuwsbrief">
        <div class="row">
            <div class="col"></div>
            <div class="text-center col-lg-6">
                <h1 class="h2 bRoboto main-color">Nieuwsbrief</h1>
                <p class="main-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris non dignissim
                    ligula, eget porta erat. Sed egestas quam ut purus dignissim malesuada. Nulla
                    molestie, ipsum eu sollicitudin convallis, nibh tortor tempor ligula, quis mattis massa tellus ut
                    purus. Vestibulum ante ipsum primis in faucibus
                    orci luctus et ultrices posuere cubilia Curae; Duis mi massa, posuere nec turpis ac, malesuada.</p>
            </div>
            <div class="col"></div>
        </div>
        <form class="text-center">
            <div class="mdc-text-field mdc-text-field--outlined">
                <input type="email" id="tf-outlined" class="mdc-text-field__input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="tf-outlined" class="mdc-floating-label">Email</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
                <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded inschrijven mt-4"
                        type="button">
                    Inschrijven
                </button>
            </div>
        </form>
    </div>
    <!-- Service -->
    <div class="p-5 pt-0 d-flex justify-content-center" id="service">
        <div class="row">
            <div class="col" id="klanten_service">
                <p class="pl-3 bRoboto lead m-2 main-color-light">Klantenservice</p>
                <ul class="service-ul main-color">
                    <li class="service-li">Contact</li>
                    <li class="service-li">Garantie</li>
                    <li class="service-li">Onderhoud</li>
                    <li class="service-li">Reparatie</li>
                    <li class="service-li">Fietsverzekering</li>
                    <li class="service-li">Privacy verklaring</li>
                    <li class="service-li">Algemene voorwaarden</li>
                </ul>
            </div>
            <div class="col" id="bestellen_betalen">
                <p class="pl-3 bRoboto lead m-2 main-color-light">Bestellen en betalen</p>
                <ul class="service-ul main-color">
                    <li class="service-li">Bestellen</li>
                    <li class="service-li">Betaling</li>
                    <li class="service-li">Verzenden & Bezorging</li>
                    <li class="service-li">Retouren</li>
                    <li class="service-li">Leasen</li>
                    <li class="service-li">Financieren</li>
                </ul>
            </div>
            <div class="col" id="merken">
                <p class="pl-3 bRoboto lead m-2 main-color-light">Populaire merken</p>
                <ul class="service-ul main-color">
                    <li class="service-li">Gazelle</li>
                    <li class="service-li">Scott</li>
                    <li class="service-li">Cortina</li>
                    <li class="service-li">Batavus</li>
                    <li class="service-li">Stromer</li>
                </ul>
            </div>
            <div class="col" id="over_ons">
                <p class="pl-3 bRoboto lead m-2 main-color-light">Populaire merken</p>
                <ul class="service-ul main-color">
                    <li class="service-li">Gebruikte Fietsen BV</li>
                    <li class="service-li">Lorem ipsum dolor xx</li>
                    <li class="service-li">xxxx xx Lorem</li>
                    <li class="service-li">Nederland</li>
                    <li class="service-li">Tel nr: +31 (0)12 345 6789</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="p-3 pl-4 bg-light" id="copyright-footer">
        <p class="m-0 copyright-text float-left copy-right">Copyright &copy; 2019 Gebruikte Fietsen</p>
        <div class="row float-right copyright-kopjes pl-5">
            <a class="text-decoration-none" href="#"><p class="copyright-text main-color-light bRoboto">Privacy</p></a>
            <a class="text-decoration-none" href="#"><p class="pl-3 copyright-text main-color-light bRoboto">Cookies</p>
            </a>
            <a class="text-decoration-none" href="#"><p class="pl-3 copyright-text main-color-light bRoboto">FAQ</p></a>
            <a class="text-decoration-none" href="#"><p class="pl-3 pr-5 copyright-text main-color-light bRoboto">Terms
                    of
                    use</p></a>
        </div>
    </div>
    <!-- Account Modal -->
    <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="mdc-button mdc-ripple-upgraded account times-button float-right dismiss-button"
                            data-dismiss="modal" aria-label="Close" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title w-100 text-center bRoboto" id="account">Inloggen</h5>
                </div>
                <div class="modal-body bg-light">
                    <form action="Controllers/login.php" method="POST">
                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                            <input type="email" name="emailInput" id="tf-outlined" class="mdc-text-field__input"
                                   required>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">E-mail</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3 mb-3">
                            <input type="password" name="passwordInput" id="tf-outlined" class="mdc-text-field__input"
                                   required>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div id="modal-buttons" class="float-right">
                            <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler mr-1"
                                    type="submit" aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation" data-dismiss="modal" data-toggle="modal"
                                    data-target="#registreerModal">
                                Registeren
                            </button>
                            <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler"
                                    type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                Inloggen
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Registreren Modal -->
    <div class="modal fade" id="registreerModal" tabindex="-1" role="dialog" aria-labelledby="registreerModalTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="mdc-button mdc-ripple-upgraded account times-button float-right dismiss-button"
                            data-dismiss="modal" aria-label="Close" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title w-100 text-center bRoboto" id="account">Registreren</h5>
                </div>
                <div class="modal-body">
                    <form action="Controllers/register.php" method="POST">
                        <div class="mdc-text-field mdc-text-field--outlined w-100">
                            <input type="email" name="emailInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">E-mail</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined w-100 mt-3">
                            <input type="password" name="passwordInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Password</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </form>
                    <div id="modal-buttons" class="float-right">
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation" data-dismiss="modal" data-toggle="modal" data-target="#accountModal">
                            Terug
                        </button>
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            Registreren
                        </button>
                    </div>
                </div>
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
<!-- Slick Slider -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="js/slick/slick_slider.js"></script>
<!-- Main -->
<script type="text/javascript" src="js/Main.js"></script>
<!-- Material.io -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="js/material/material.js"></script>
</body>
</html>