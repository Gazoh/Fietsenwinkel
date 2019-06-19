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
    =integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" type=' text/css' media='all'>
    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="css/Animate/animate.css"/>
    <title>Damesfietsen</title>
</head>
<body>
<div class="container-fluid">
    <!-- Modal Mobile Filter-->
    <div class="modal animated fadeInLeft" id="mobileFilter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog float-left m-0" role="document">
            <div class="modal-content border-radius0">
                <div class="modal-body">
                    <!-- Type Fietsen -->
                    <div id="type-fietsen">
                        <button class="foo-button mdc-button mdc-ripple-upgraded account times-button float-right" data-dismiss="modal" aria-label="Close" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <p class="h2 bRoboto main-color type-fiets">Type fiets</p>
                        <hr>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Elektrische fietsen</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Stadsfietsen</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Racefietsen</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Vouwfietsen</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Mountainbikes</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Tandems</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Schoolfietsen</label>
                        </div>
                    </div>
                    <!-- Frame type -->
                    <div id="frametype">
                        <p class="h2 bRoboto main-color pt-5">Frametype</p>
                        <hr>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Damesfieten</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Herenfietsen</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Kinderfietsen</label>
                        </div>
                    </div>
                    <!-- Merk -->
                    <div id="merk">
                        <p class="h2 bRoboto main-color pt-5">Merk</p>
                        <hr>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Gazelle</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Scott</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Cortina</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Batavus</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Stromer</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Abus</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Target</label>
                        </div>
                    </div>
                    <!-- Kleur -->
                    <div id="kleur">
                        <p class="h2 bRoboto main-color pt-5">Kleur</p>
                        <hr>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Groen</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Blauw</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Rood</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Geel</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Wit</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Grijs</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Bruin</label>
                        </div>
                        <div class="mdc-form-field d-block">
                            <div class="mdc-checkbox">
                                <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                            <label for="checkbox-1">Zwart</label>
                        </div>
                    </div>
                    <!-- Kleur -->
                    <div id="prijs">
                        <p class="h2 bRoboto main-color pt-5">Prijs</p>
                        <hr>
                        <div class="mdc-slider mdc-slider--discrete" tabindex="0" role="slider"
                             aria-valuemin="359" aria-valuemax="5489" aria-valuenow="0" aria-label="Select Value">
                            <div class="mdc-slider__track-container">
                                <div class="mdc-slider__track"></div>
                            </div>
                            <div class="mdc-slider__thumb-container">
                                <div class="mdc-slider__pin">
                                    <span class="mdc-slider__pin-value-marker"></span>
                                </div>
                                <svg class="mdc-slider__thumb" width="21" height="21">
                                    <circle cx="10.5" cy="10.5" r="7.875"></circle>
                                </svg>
                                <div class="mdc-slider__focus-ring"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account w-100"
                                type="button">
                            Aanpassen
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Damesfietsen<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Herenfietsen.html">Herenfietsen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Kinderfietsen.html">Kinderfietsen</a>
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
                        <div class="row">
                            <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account w-100 bRoboto"
                                    type="button" id="bestellenDropdown">
                                Bestellen
                            </button>
                        </div>
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
    <!-- Header Filter -->
    <div id="filter-header" class="header float-left p-5">
        <!-- Type Fietsen -->
        <div id="type-fietsen">
            <p class="h2 bRoboto main-color type-fiets">Type fiets</p>
            <hr>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Elektrische fietsen</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Stadsfietsen</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Racefietsen</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Vouwfietsen</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Mountainbikes</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Tandems</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Schoolfietsen</label>
            </div>
        </div>
        <!-- Frame type -->
        <div id="frametype">
            <p class="h2 bRoboto main-color pt-5">Frametype</p>
            <hr>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Damesfieten</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Herenfietsen</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Kinderfietsen</label>
            </div>
        </div>
        <!-- Merk -->
        <div id="merk">
            <p class="h2 bRoboto main-color pt-5">Merk</p>
            <hr>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Gazelle</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Scott</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Cortina</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Batavus</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Stromer</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Abus</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Target</label>
            </div>
        </div>
        <!-- Kleur -->
        <div id="kleur">
            <p class="h2 bRoboto main-color pt-5">Kleur</p>
            <hr>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Groen</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Blauw</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Rood</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Geel</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Wit</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Grijs</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Bruin</label>
            </div>
            <div class="mdc-form-field d-block">
                <div class="mdc-checkbox">
                    <input type="checkbox" class="mdc-checkbox__native-control" id="checkbox-1"/>
                    <div class="mdc-checkbox__background">
                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                            <path class="mdc-checkbox__checkmark-path" fill="none"
                                  d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                        </svg>
                        <div class="mdc-checkbox__mixedmark"></div>
                    </div>
                </div>
                <label for="checkbox-1">Zwart</label>
            </div>
        </div>
        <!-- Kleur -->
        <div id="prijs">
            <p class="h2 bRoboto main-color pt-5">Prijs</p>
            <hr>
            <div class="mdc-slider mdc-slider--discrete" tabindex="0" role="slider"
                 aria-valuemin="359" aria-valuemax="5489" aria-valuenow="0" aria-label="Select Value">
                <div class="mdc-slider__track-container">
                    <div class="mdc-slider__track"></div>
                </div>
                <div class="mdc-slider__thumb-container">
                    <div class="mdc-slider__pin">
                        <span class="mdc-slider__pin-value-marker"></span>
                    </div>
                    <svg class="mdc-slider__thumb" width="21" height="21">
                        <circle cx="10.5" cy="10.5" r="7.875"></circle>
                    </svg>
                    <div class="mdc-slider__focus-ring"></div>
                </div>
            </div>
        </div>
        <div class="pt-4">
            <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account w-100"
                    type="button">
                Aanpassen
            </button>
        </div>
    </div>
    <!-- Fietsen   -->
    <div class="row fietsen p-4">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 bike">
           <a href="damesfiets_detail.html">
                <img src="assets/img/bike_boys.png" class="img-thumbnail">
            </a>
            <div class="bike-information">
                <div class="h5">
                    <span class="bRoboto">Lorem </span>ipsum adiscing elit ligula
                    <div class="d-block h6 pt-2 main-color-light bRoboto">
                        <span class="Onbeschadigd">Onbeschadigd</span>
                        <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                           title="Voordeel &euro; 189,-"></i></span>
                    </div>
                    <span class="d-block color-light iRoboto font-italic line-through">&euro; 1276,-</span>
                </div>
                <div class="h3">
                    <span class="bRoboto mt-5 main-color">&euro; 1087,-</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 bike ">
            <img src="assets/img/bike_boys.png" class="img-thumbnail">
            <div class="bike-information">
                <div class="h5">
                    <span class="bRoboto">Lorem </span>ipsum adiscing elit ligula
                    <div class="d-block h6 pt-2 main-color-light bRoboto">
                        <span class="Onbeschadigd">Onbeschadigd</span>
                        <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                           title="Voordeel &euro; 189,-"></i></span>
                    </div>
                    <span class="d-block color-light iRoboto font-italic line-through">&euro; 1276,-</span>
                </div>
                <div class="h3">
                    <span class="bRoboto mt-5 main-color">&euro; 1087,-</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 bike ">
            <img src="assets/img/bike_boys.png" class="img-thumbnail">
            <div class="bike-information">
                <div class="h5">
                    <span class="bRoboto">Lorem </span>ipsum adiscing elit ligula
                    <div class="d-block h6 pt-2 main-color-light bRoboto">
                        <span class="Onbeschadigd">Onbeschadigd</span>
                        <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                           title="Voordeel &euro; 189,-"></i></span>
                    </div>
                    <span class="d-block color-light iRoboto font-italic line-through">&euro; 1276,-</span>
                </div>
                <div class="h3">
                    <span class="bRoboto mt-5 main-color">&euro; 1087,-</span>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 bike ">
            <img src="assets/img/bike_boys.png" class="img-thumbnail">
            <div class="bike-information">
                <div class="h5">
                    <span class="bRoboto">Lorem </span>ipsum adiscing elit ligula
                    <div class="d-block h6 pt-2 main-color-light bRoboto">
                        <span class="Onbeschadigd">Onbeschadigd</span>
                        <i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top"
                           title="Voordeel &euro; 189,-"></i></span>
                    </div>
                    <span class="d-block color-light iRoboto font-italic line-through">&euro; 1276,-</span>
                </div>
                <div class="h3">
                    <span class="bRoboto mt-5 main-color">&euro; 1087,-</span>
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
<!-- Material.io -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="js/material/material.js"></script>
<!-- Main -->
<script type="text/javascript" src="js/Main.js"></script>
</body>
</html>