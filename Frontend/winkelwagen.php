<?php
require_once("Controllers/dbconnect.php");
require_once("Controllers/userdata.php");
session_start();
if (!isset($_SESSION['cart'])) {
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
}
if (!isset($_SESSION['first_name'])) {
    $_SESSION['first_name'] = "";
}
if (!isset($_SESSION['loginstatus'])) {
    $_SESSION['loginstatus'] = "false";
}
// Id ophalen
$requested_query_vars = $_SERVER["QUERY_STRING"];
$id = str_replace("id=", "", $requested_query_vars);
$sql = "SELECT * FROM bikes WHERE id = '$id'";
$res = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    $image_path = $row['image_path'];
    $bikename = $row['bikename'];
    $bikebrand = $row['brand'];
    $damaged = $row['damaged'];
    $price = $row['selling_price'];
    $framenumber = $row['framenumber'];
    $color = $row['color'];
    $gears = $row['gears'];
    $description = $row['description'];
}
$itemids = implode(", ", $_SESSION['cart']);
debug_to_console($itemids);
if ($itemids != "") {
    $sqlgetItems = "SELECT * FROM bikes WHERE id in(" . $itemids . ")";
    debug_to_console($sqlgetItems);
    $resItems = mysqli_query($con, $sqlgetItems);
    $resBikes = mysqli_query($con, $sqlgetItems);
    debug_to_console(mysqli_error($con));
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
    =integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"
    type='
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
                <?php if (($_SESSION['loginstatus'] == "false")) {
                    echo "<button class=\"foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account mr-2\"
                        data-toggle=\"modal\" data-target=\"#accountModal\">";
                } ?>
                <?php if (!isset($_SESSION['loginstatus'])) {
                    echo "<button class=\"foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account mr-2\"
                        data-toggle=\"modal\" data-target=\"#accountModal\">";
                } elseif ($_SESSION['loginstatus'] == 1) {
                    echo "<button class=\"foo-button mdc-button mdc-button--dense mdc-ripple-upgraded account mr-2\"
                        data-toggle=\"modal\" data-target=\"#accountDetailModal\">";
                } ?>
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
                        <?php
                        if ($itemids == "") {
                            echo "<p>Er zijn geen artikelen in uw winkelwagen</p>";
                        } else {
                            if (isset($res)) {
                                if (mysqli_num_rows($resItems) > 0) {
                                    while ($bike = mysqli_fetch_assoc($resItems)) {
                                        echo "<div class=\"order\">";
                                        echo "<div class=\"float-right\">";
                                        echo " <div class=\"m-0 pt-3 bRoboto\">" . $bike['brand'] . " " . $bike['bikename'] . "</div>";
                                        echo "<div class=\"m-0 text-right shopping-bedrag font-weight-normal\">&euro;" . $bike['selling_price'] . "</div>";
                                        echo "</div>";
                                        echo "<div class=\"float-left pt-4\">";
                                        echo "<a href='Controllers/delete_cart.php?id=" . $bike['id'] . "' class=\"fas fa-times pr-4\"></a>";
                                        echo "</div>";
                                        echo "<img src=\"assets/img/bike.png\" width=\"60\">";

                                        echo "</div>";
                                    }
                                    echo "<hr>";
                                    echo "<div class='pt - 1 text - center bRoboto' id='totaalbedrag'>";
                                    echo "  <p>&euro; " . $_SESSION['total_price'] . ",-</p>";
                                    echo "</div>";
                                    echo "<hr>";
                                    echo "<p class='text - center'>" . count($_SESSION['cart']) . " Artikelen in winkelwagen</p>";
                                    echo "<div class='row'>";
                                    echo "<button class='foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account w-100 bRoboto'
                                    type = 'button' id = 'bestellenDropdown'><a class='text-white' href='winkelwagen.php'>Bestellen</a></button >";
                                    echo "</div >";
                                }
                            }
                        }
                        ?>
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
        <p class="h1 d-flex justify-content-center mt-4 bRoboto">Winkelwagen</p>
        <hr class="w-50">
        <?php
        if ($itemids == "") {
            echo "<p>Er zijn geen artikelen in uw winkelwagen</p>";
        }else if ($resItems->num_rows > 0) {
            while ($bike = mysqli_fetch_assoc($resBikes)) {
                echo "<div class=\"row p-2 bg-light w-100 m-0 justify-content-center\">";
                echo "<div class=\"col-xl-2 float-right\">";
                echo "<img src=\"assets/img/bike_detail.png\" class=\"float-left winkelwagen-image\">";
                echo "<p class=\"bRoboto d-block justify-content-center text-center m-0\">" . $bike['brand'] . " " . $bike['bikename'] . "</p>";
                if($bike['damaged'] == 0)
                {
                    echo "<p class=\"main-color-light d-block justify-content-center text-center\">Onbeschadigd</p>";
                } elseif($bike['damaged'] == 1)
                {
                    echo "<p class=\"main-color-light d-block justify-content-center text-center\">Beschadigd</p>";
                }
                echo "</div>";
                echo "<div class=\"vr my-auto\"></div>";
                echo "<div class=\"brand pl-5 pr-5 h-100 my-auto\">";
                echo "<p class=\"iRoboto m-0 text-center\">Merk</p>";
                echo "<p class=\"bRoboto text-center\">" . $bike['brand'] . "</p>";
                echo "</div>";
                echo "<div class=\"vr my-auto\"></div>";
                echo "<div class=\"brand pl-5 pr-5 h-100 my-auto\">";
                echo "<p class=\"iRoboto m-0 text-center\">Color</p>";
                echo "<p class=\"bRoboto text-center\">". $bike['color'] ."</p>";
                echo "</div>";
                echo "<div class=\"vr my-auto\"></div>";
                echo "<div class=\"brand pl-5 pr-5 h-100 my-auto\">";
                echo "<p class=\"iRoboto m-0 text-center\">Framenummer</p>";
                echo "<p class=\"bRoboto text-center\">". $bike['framenumber'] ."</p>";
                echo "</div>";
                echo "<div class=\"vr my-auto\"></div>";
                echo "<div class=\"brand pl-5 pr-5 h-100 my-auto\">";
                echo "<p class=\"iRoboto m-0 text-center\">Versnellingen</p>";
                echo "<p class=\"bRoboto text-center   \">". $bike['gears'] ."</p>";
                echo "</div>";
                echo "<div class=\"vr my-auto\"></div>";
                echo "<div class=\"brand pl-5 pr-5 h-100 my-auto\">";
                echo "<p class=\"iRoboto m-0 text-center\">Prijs</p>";
                echo "<p class=\"bRoboto text-center main-color-light\">&euro; ". $bike['selling_price'] .",-</p>";
                echo "</div>";
                echo "<div class=\"vr my-auto\"></div>";
                echo "<div class=\"brand pl-5 pr-5 h-100 my-auto\">";
                echo "<a class=\"foo-button mdc-button mdc-button--label mdc-ripple-upgraded account navbar-toggler mr-1\" href='Controllers/delete_cart.php?id=" . $bike['id'] . "'>
                    <span aria-hidden=\"true\">&times;</span>
                </a>";
                echo "</div>";
                echo "</div>";
            }
        }
        if($_SESSION['loginstatus'] == 1)
        {
            echo "<button class='foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account w-100 bRoboto'
                                    type = 'button' id = 'bestellenDropdown'><a href='Controllers/order.php'>Bestellen</a></button >";
        }
        ?>
    </div>
</div>
<!-- Account Modal -->
<div class="modal fade" id="accountModal" tabindex=" - 1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal - dialog modal - dialog - centered" role="document">
        <div class="modal - content">
            <div class="modal - header">
                <button class="mdc - button mdc - ripple - upgraded account times - button float - right dismiss - button"
                        data-dismiss="modal" aria-label="Close" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal - title w - 100 text - center bRoboto" id="account">Inloggen</h5>
            </div>
            <div class="modal - body bg - light h - 100">
                <form action="Controllers / login . php" method="POST" id="formLogin">
                    <div class="mdc - text - field mdc - text - field--outlined w - 100">
                        <input type="email" name="emailInput" id="tf - outlined" class="mdc - text - field__input"
                               required>
                        <div class="mdc - notched - outline">
                            <div class="mdc - notched - outline__leading"></div>
                            <div class="mdc - notched - outline__notch">
                                <label for="tf - outlined" class="mdc - floating - label">E-mail</label>
                            </div>
                            <div class="mdc - notched - outline__trailing"></div>
                        </div>
                    </div>
                    <div class="mdc - text - field mdc - text - field--outlined w - 100 mt - 3 mb - 3">
                        <input type="password" name="passwordInput" id="tf - outlined" class="mdc - text - field__input"
                               required>
                        <div class="mdc - notched - outline">
                            <div class="mdc - notched - outline__leading"></div>
                            <div class="mdc - notched - outline__notch">
                                <label for="tf - outlined" class="mdc - floating - label">Password</label>
                            </div>
                            <div class="mdc - notched - outline__trailing"></div>
                        </div>
                    </div>
                    <div id="modal - buttons" class="float - right">
                        <button class="foo - button mdc - button mdc - button--unelevated mdc - ripple - upgraded account navbar - toggler mr - 1"
                                type="submit" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation" data-dismiss="modal" data-toggle="modal"
                                data-target="#registreerModal">
                            Registeren
                        </button>
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler"
                                type="submit" name="submit" form="formLogin" aria - controls="navbarSupportedContent"
                                aria - expanded="false"
                                aria - label="Toggle navigation">
                            Inloggen
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Registreren Modal-->
<div class="modal fade" id="registreerModal" tabindex="-1" role="dialog" aria - labelledby="registreerModalTitle"
     aria - hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="mdc-button mdc-ripple-upgraded account times-button float-right dismiss-button"
                        data - dismiss="modal" aria - label="Close" type="button">
                    <span aria - hidden="true">&times;</span>
                </button>
                <h5 class="modal-title w-100 text-center bRoboto" id="account"> Registreren</h5>
            </div>
            <div class="modal-body p-4">
                <form action="Controllers/register.php" method="POST" id="registreerForm">
                    <div class="row justify-content-center">
                        <div class="mdc-text-field mdc-text-field--outlined mr-2">
                            <input type="text" name="firstNameInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Voornaam</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined">
                            <input type="text" name="lastNameInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Achternaam</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" name="adressInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Straat</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" name="houseNumberInput" id="tf-outlined"
                                   class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Huisnummer</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" name="zipCodeInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Postcode</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" name="cityInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Stad</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" name="phoneInput" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Telefoonnummer</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined w-91 mt-2">
                            <input type="email" name="emailInput" id="tf-outlined" class="mdc-text-field__input"
                                   required>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> E - mail</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined w-91 mt-2">
                            <input type="password" name="passwordInput" id="tf-outlined" class="mdc-text-field__input"
                                   required minlength="6">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"> Wachtwoord</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer w-100">
                <div id="modal-buttons" class="float-right">
                    <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler"
                            aria - controls="navbarSupportedContent" aria - expanded="false"
                            aria - label="Toggle navigation" data - dismiss="modal" data - toggle="modal"
                            data - target="#accountModal">
                        Terug
                    </button>
                    <button type="submit" name="submit" form="registreerForm"
                            class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler"
                            aria - controls="navbarSupportedContent" aria - expanded="false"
                            aria - label="Toggle navigation">
                        Registreren
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Optional JavaScript-->
<!--jQuery first, then Popper . js, then Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!--Material.io-->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="js/material/material.js"></script>
<!--Main -->
<script type="text/javascript" src="js/Main.js"></script>
</body>
</html>