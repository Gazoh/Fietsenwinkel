<?php
session_start();
require_once("Controllers/userdata.php");
if (!isset($_SESSION['first_name'])) {
    $_SESSION['first_name'] = "";
}

// Id ophalen
require_once("controllers/dbconnect.php");
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

// Cart
$itemids = implode(", ", $_SESSION['cart']);
debug_to_console($itemids);
if ($itemids != "") {
    $sqlgetItems = "SELECT * FROM bikes WHERE id in(" . $itemids . ")";
    $resItems = mysqli_query($con, $sqlgetItems);
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
    <title>Dames Fietsen</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Damesfietsen<span class="sr-only">(current)</span></a>
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
                }?>
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
                                    echo "  <p>&euro; " . $_SESSION['total_price'] .",-</p>";
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
    <div class="content pt-3 p-2">
        <div class="row justify-content-center w-100 m-0">
            <div class="col-xl-3 col-lg-5 col-md-10 col-sm-10 float-left mr-5">
                <img src="<?php echo $image_path ?>" class="img-thumbnail image-detail">
            </div>
            <div class="col-xl-5 col-lg-10 col-md-10 col-sm-10 col-10 h-100 my-auto p-3">
                <div class="bike_information_detail">
                    <p class="h4"><span class="bRoboto"><?php echo $bikename ?></p>
                    <p class="h6 main-color-light"><?php if ($damaged == 0) {
                            echo "Onbeschadigd";
                        } else if ($damaged == 1) {
                            echo "Beschadigd";
                        } ?></p>
                    <div class="w-100">
                        <p class="h3 main-color bRoboto float-left prijsdetail">&euro; <?php echo $price ?>,-</p>
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account bRoboto winkelwagen ml-5" type="button" id="bestellenDropdown">
                            In Winkelwagen
                        </button>
                    </div>
                </div>
                <hr class="w-100">
                <div id="check">
                    <div class="mb-2" id="gratis-verzenden">
                        <i class="fas fa-check-circle mr-2 succes"></i>
                        <span class="bRoboto">Gratis </span>verzenden
                    </div>
                    <div class="mb-2" id="ruilen-retourneren">
                        <i class="fas fa-check-circle mr-2 succes"></i>
                        tot <span class="bRoboto">14 dagen </span> ruilen en retourneren
                    </div>
                    <div class="mb-2" id="geld-terug">
                        <i class="fas fa-check-circle mr-2 succes"></i>
                        Niet goed = <span class="bRoboto">geld terug </span>
                    </div>
                    <div id="klanten-beoordeling">
                        <i class="fas fa-check-circle mr-2 succes"></i>
                        <span class="bRoboto">Klantenbeoordeling 9.1 uit 7532 reviews</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 mt-4 float-left" id="product-omschrijving">
                <p class="h3 bRoboto">Productomschrijving</p>
                <p><?php echo $description ?></p>
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 float-left">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="row">Merk</th>
                        <td><?php echo $bikebrand ?></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Framenummer</th>
                        <td><?php echo $framenumber ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Kleur</th>
                        <td><?php echo $color ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Conditie</th>
                        <td><?php if ($damaged == 0) {
                                echo "Onbeschadigd";
                            } else if ($damaged == 1) {
                                echo "Beschadigd";
                            } ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Productnaam</th>
                        <td><?php echo $bikename ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Versnellingen</th>
                        <td><?php echo $gears ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
                <div class="modal-body bg-light h-100">
                    <form action="Controllers/login.php" method="POST" id="formLogin">
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
                                    type="submit" name="submit" form="formLogin" aria-controls="navbarSupportedContent"
                                    aria-expanded="false"
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
                <div class="modal-body p-4">
                    <form action="Controllers/register.php" method="POST" id="registreerForm">
                        <div class="row justify-content-center">
                            <div class="mdc-text-field mdc-text-field--outlined mr-2">
                                <input type="text" name="firstNameInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Voornaam</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input type="text" name="lastNameInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Achternaam</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="adressInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Straat</label>
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
                                        <label for="tf-outlined" class="mdc-floating-label">Huisnummer</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="zipCodeInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Postcode</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="cityInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Stad</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="phoneInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Telefoonnummer</label>
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
                                        <label for="tf-outlined" class="mdc-floating-label">E-mail</label>
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
                                        <label for="tf-outlined" class="mdc-floating-label">Wachtwoord</label>
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
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation" data-dismiss="modal" data-toggle="modal"
                                data-target="#accountModal">
                            Terug
                        </button>
                        <button type="submit" name="submit" form="registreerForm"
                                class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded account navbar-toggler"
                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            Registreren
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Account detail modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true" id="accountDetailModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="mdc-button mdc-ripple-upgraded account times-button float-right dismiss-button"
                        data-dismiss="modal" aria-label="Close" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title w-100 text-center bRoboto" id="account">Account gegevens</h5>
            </div>
            <div class="modal-body">
                <!-- List group -->
                <aside class="mdc-drawer float-left mr-3 h-100 mt-5">
                    <div class="mdc-drawer__content">
                        <nav class="list-group mdc-list">
                            <a class="mdc-list-item mdc-list-item--activated" data-toggle="list" href="#profile" role="tab">
                                <i class="fas fa-user-circle detail-modal-icon"></i>
                                <i class="material-icons mdc-list-item__graphic w-100" aria-hidden="true">Mijn
                                    Profiel</i>
                            </a>
                            <a class="mdc-list-item" href="controllers/logout.php">
                                <i class="fas fa-sign-out-alt detail-modal-icon pl-1"></i>
                                <i class="material-icons mdc-list-item__graphic w-100" aria-hidden="true">Uitloggen</i>
                            </a>
                        </nav>
                    </div>
                </aside>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="row">
                            <div class="mdc-text-field w-50 mr-2">
                                <input type="text" id="pre-filled" class="mdc-text-field__input"
                                       value="<?php echo $user_first_name ?>">
                                <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                    Voornaam
                                </label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                            <div class="mdc-text-field w-48">
                                <input type="text" id="pre-filled" class="mdc-text-field__input"
                                       value="<?php echo $user_last_name ?>">
                                <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                    Achternaam
                                </label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="mdc-text-field mr-2 w-70">
                                <input type="text" id="pre-filled" class="mdc-text-field__input"
                                       value="<?php echo $user_adress; ?>">
                                <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                    Adres
                                </label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                            <div class="mdc-text-field w-28">
                                <input type="text" id="pre-filled" class="mdc-text-field__input"
                                       value="<?php echo $user_house_number; ?>">
                                <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                    Huisnummer
                                </label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="mdc-text-field mr-2 w-50">
                                <input type="text" id="pre-filled" class="mdc-text-field__input"
                                       value="<?php echo $user_zip_code; ?>">
                                <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                    Postcode
                                </label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                            <div class="mdc-text-field w-48">
                                <input type="text" id="pre-filled" class="mdc-text-field__input"
                                       value="<?php echo $user_email; ?>">
                                <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                    Email
                                </label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                            <div class="mdc-text-field mt-2 w-100">
                                <input type="text" id="pre-filled" class="mdc-text-field__input"
                                       value="<?php echo $user_phone; ?>">
                                <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                    Telefoonnummer
                                </label>
                                <div class="mdc-line-ripple"></div>
                            </div>
                        </div>
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
<!-- Material.io -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="js/material/material.js"></script>
<!-- Main -->
<script type="text/javascript" src="js/Main.js"></script>
</body>
</html>