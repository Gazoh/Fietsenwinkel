<?php
require_once("Controllers/dbconnect.php");
// Ophalen van fietsen uit database en die in $records zetten om er later doorheen te loopen.
$records = $con->query("SELECT * FROM bikes");

session_start();
if (isset($_SESSION['loginstatus'])) {
    $loginstatus = $_SESSION['loginstatus'];
}
// Check if remember me cookie is on.
if (isset($_COOKIE['rememberMe'])) {
    $token = $_COOKIE['rememberMe'];
    $sql = "SELECT * FROM users WHERE remember_me = '$token'";

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    $name = $_POST['first_name'];
}

?>
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
    <!-- Material -->
    <link href="css/Material/material-components-web.min.css" rel="stylesheet">
    <!--  Fonts & Eigen CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="scss/backend.css">
    <!--  Datatable  -->
    <link rel="stylesheet" type="text/css" href="css/Datatable/select.dataTables.min.css">
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
                <a class="accordion-toggle collapsed toggle-switch" href="index.php">
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
                <a class="accordion-toggle collapsed toggle-switch" href="klanten.php">
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
                            <span class="sidebar-icon pr-2"><i
                                        class="fa fa-times-circle iconwidthBestellingen iconwidth"></i></span>
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
            <li class="sidebarLi active">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
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
        <div class="justify-content-end"></div>
        <div class="mdc-chip-set pl-2 pr-2">
            <div class="hiUser pr-1 pt-2">
                <span class="hiNav">Hi,  <span class="bRoboto" id="usernameNav"><?php echo print_r($_SESSION["first_name"]);?></span></span>
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
                <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded toevoegen" id="toevoegen"
                        data-toggle="modal" data-target="#toevoegenModal">
                    <i class="fas fa-plus"></i>
                    <span class="pr-2"></span>
                    <span class="mdc-button__label">Toevoegen</span>
                </button>
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
                <table id="fietsen" class="table-card" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Afbeelding</th>
                        <th>Merk</th>
                        <th>Kleur</th>
                        <th>Framenummer</th>
                        <th>Beschadigd</th>
                        <th>Naam</th>
                        <th>Beschrijving</th>
                        <th>Type</th>
                        <th>Versnellingen</th>
                        <th>Prijs</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($records)) {
                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['image_path'] ?></td>
                            <td><?php echo $row['brand'] ?></td>
                            <td><?php echo $row['color'] ?></td>
                            <td><?php echo $row['framenumber'] ?></td>
                            <td><?php if ($row['damaged'] == 1) {
                                    echo "Beschadigd";
                                } else if ($row['damaged'] == 0) {
                                    echo "Onbeschadigd";
                                } ?></td>
                            <td><?php echo $row['bikename'] ?></td>
                            <td><?php echo $row['description']?></td>
                            <td><?php if ($row['biketype'] == 0) {
                                    echo 'Damesfiets';
                                } else if ($row['biketype'] == 1) {
                                    echo 'Herenfiets';
                                } else if ($row['biketype'] == 2) {
                                    echo 'Kinderfiets';
                                } ?></td>
                            <td><?php echo $row['gears'] ?></td>
                            <td><?php echo "&euro; " . $row['selling_price'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Afbeelding</th>
                        <th>Merk</th>
                        <th>Kleur</th>
                        <th>Framenummer</th>
                        <th>Beschadigd</th>
                        <th>Naam</th>
                        <th>Beschrijving</th>
                        <th>Type</th>
                        <th>Versnellingen</th>
                        <th>Prijs</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Toevoegen Modal -->
    <div class="modal fade" id="toevoegenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fiets toevoegen</h5>
                </div>
                <div class="modal-body p-4">
                    <form action="Controllers/fiets_toevoegen.php" method="POST" id="fietsenToevoegen">
                        <!-- Voornaam & Achternaam -->
                        <div class="row justify-content-center">
                            <div class="mdc-text-field mdc-text-field--outlined mr-2">
                                <input type="text" name="bikenameInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Fietsnaam</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input type="text" name="brandInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Merk</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--textarea mt-2 w-91">
                                <textarea id="textarea" name="descriptionInput" class="mdc-text-field__input" rows="8" cols="40"></textarea>
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="textarea" class="mdc-floating-label">Description</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="frametypeInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Frametype</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="btn-group btn-group-toggle mt-2 w-91" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="damaged" value="0" autocomplete="off" checked> Onbeschadigd
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="damaged" value="1" autocomplete="off"> Beschadigd
                                </label>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="colorInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Kleur</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="gearsInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Versnellingen</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="text" name="priceInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Prijs</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                             <div class="btn-group btn-group-toggle mt-2 w-91" data-toggle="buttons" id="biketype">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="biketype" value="0" autocomplete="off" checked>Damesfiets
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="biketype" value="1" autocomplete="off">Herenfiets
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="biketype" value="2" autocomplete="off">Kinderfiets
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help error"
                            data-dismiss="modal">
                        <span class="mdc-button__label">Sluiten</span>
                    </button>
                    <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help main-color-light"
                            type="submit" name="submit" form="fietsenToevoegen">
                        <span class="mdc-button__label">Toevoegen</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Bike -->
    <div class="modal" tabindex="-1" role="dialog" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Weet je het zeker?</h5>
                </div>
                <div class="modal-body p-5 row">
                    <img src="Assets/img/delete_icon.svg" alt="DELETE ICON"
                         class="img-thumbnail no-border justify-content-center" width="75">
                    <p class="col-10 text-center bRoboto pt-3">Wilt u dit record echt verwijderen? Dit proces kan niet ongedaan worden gemaakt.</p>
                </div>
                <div class="modal-footer">
                    <form>
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help main-color-light"
                                data-dismiss="modal">
                            <span class="mdc-button__label">Sluiten</span>
                        </button>
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help error"
                                type="submit" name="submit" id="deleteBike">
                            <span class="mdc-button__label">Verwijderen</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Aanpassen Modal -->
<div class="modal fade" id="bijwerkenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Fiets Aanpassen</h5>
            </div>
            <div class="modal-body p-4">
                <form action="Controllers/fiets_aanpassen.php" method="POST" id="addFiets">
                    <!-- Voornaam & Achternaam -->
                    <div class="row justify-content-center">
                        <div class="mdc-text-field mr-2 mt-2">
                            <input type="text" name="brandInputBijwerken" id="brandInputBijwerken" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Merk
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="mdc-text-field mt-2">
                            <input type="text" name="colorInputBijwerken" id="colorInputBijwerken" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Kleur
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="mdc-text-field mt-2 w-91">
                            <input type="text" name="framenumberInputBijwerken" id="framenumberInputBijwerken" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Framenummer
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="btn-group btn-group-toggle mt-2 w-91" data-toggle="buttons" id="damaged">
                            <label class="btn btn-secondary" id="onbeschadigd">
                                <input type="radio" name="damaged" value="0" autocomplete="off"> Onbeschadigd
                            </label>
                            <label class="btn btn-secondary" id="beschadigd">
                                <input type="radio" name="damaged" value="1" autocomplete="off"> Beschadigd
                            </label>
                        </div>
                        <div class="mdc-text-field mt-2 w-91">
                            <input type="text" name="nameInputBijwerken" id="nameInputBijwerken" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Naam
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="mdc-text-field mt-2 w-91">
                            <input type="text" name="descriptionInputBijwerken" id="descriptionInputBijwerken" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Description
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="btn-group btn-group-toggle mt-2 w-91" data-toggle="buttons" id="biketype">
                            <label class="btn btn-secondary" id="damesfiets">
                                <input type="radio" name="biketype" value="0" autocomplete="off">Damesfiets
                            </label>
                            <label class="btn btn-secondary" id="herenfiets">
                                <input type="radio" name="biketype" value="1" autocomplete="off">Herenfiets
                            </label>
                            <label class="btn btn-secondary" id="kinderfiets">
                                <input type="radio" name="biketype" value="2" autocomplete="off">Kinderfiets
                            </label>
                        </div>
                        <div class="mdc-text-field mt-2 w-91">
                            <input type="text" name="gearsInputBijwerken" id="gearsInputBijwerken" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Versnellingen
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="mdc-text-field mt-2 w-91">
                            <input type="text" name="priceInputBijwerken" id="priceInputBijwerken" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Prijs
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal"
                        class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help error">
                    <span class="mdc-button__label">Sluiten</span>
                </button>
                <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help main-color-light"
                        type="submit" name="submit" form="addMedewerker">
                    <span class="mdc-button__label">Aanpassen</span>
                </button>
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
<!-- Datatable -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="JS/datatable/datatable_fietsen.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
<!-- Sidebar & Nav -->
<script src="JS/sidebar.js"></script>
<script src="JS/nav.js"></script>
<!-- Material -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="JS/google-material/index.js"></script>
</body>
</html>