<?php
require_once("Controllers/dbconnect.php");
// Ophalen van users uit database en die in $records zetten om er later doorheen te loopen.
$records = $con->query("SELECT * FROM discount_codes");
?>
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
    <link rel="stylesheet" href="css/Datatable/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/Datatable/datatables.min.css"/>
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/Animate/animate.css">
    <!--   Title -->
    <title>Fietsenwinkel - Aanbiedingen</title>
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
                <a class="accordion-toggle collapsed toggle-switch" href="dashboard.php">
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
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="fietsen.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fa fa-bicycle iconwidth"></i></span>
                        <span class="pr-15"></span>
                        <span class="sidebar-title">Fietsen</span>
                    </div>
                </a>
            </li>
            <li class="sidebarLi active">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
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
                <table id="aanbiedingen" class="table-card" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Kortingscode</th>
                        <th>Bedrag</th>
                        <th>Geldig</th>
                        <th>Van</th>
                        <th>Tot</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($records)) {

                        ?>
                        <tr>
                            <td></td>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['code'] ?></td>
                            <td>€ <?php echo $row['amount'] ?></td>
                            <td><?php if ($row['is_valid'] == 1) {
                                    echo "Geldig";
                                } elseif ($row['is_valid'] == 0) {
                                    echo "Ongeldig";
                                } ?></td>
                            <td><?php echo $row['creation_date'] ?></td>
                            <td><?php echo $row['expiry_date'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Kortingscode</th>
                        <th>Bedrag</th>
                        <th>Geldig</th>
                        <th>Van</th>
                        <th>Tot</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Aanbiedingen toevoegen</h5>
                </div>
                <div class="modal-body p-4">
                    <!-- Voornaam & Achternaam -->
                    <form action="Controllers/aanbieding_toevoegen.php" method="POST" id="aanbiedingenToevoegen">
                        <div class="row justify-content-center">
                            <div class="mdc-text-field mdc-text-field--outlined mr-2">
                                <input type="text" name="codeInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Kortingscode</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined">
                                <input type="number" name="amountInput" id="tf-outlined" class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label">Bedrag</label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="btn-group btn-group-toggle mt-2 w-91" data-toggle="buttons" id="valid">
                                <label class="btn btn-secondary">
                                    <input type="radio" name="validInput" value="0" autocomplete="off">Ongeldig
                                </label>
                                <label class="btn btn-secondary">
                                    <input type="radio" name="validInput" value="1" autocomplete="off">Geldig
                                </label>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="date" name="creationdateInput" id="creationdateInput"
                                       class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label"></label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field-helper-line">
                                <div class="mdc-text-field-helper-text">Geldig vanaf</div>
                            </div>
                            <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                                <input type="date" name="expirydateInput" id="expirydateInput"
                                       class="mdc-text-field__input">
                                <div class="mdc-notched-outline">
                                    <div class="mdc-notched-outline__leading"></div>
                                    <div class="mdc-notched-outline__notch">
                                        <label for="tf-outlined" class="mdc-floating-label"></label>
                                    </div>
                                    <div class="mdc-notched-outline__trailing"></div>
                                </div>
                            </div>
                            <div class="mdc-text-field-helper-line">
                                <div class="mdc-text-field-helper-text">Geldig Tot</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help error"
                                    data-dismiss="modal">
                                <span class="mdc-button__label">Sluiten</span>
                            </button>
                            <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help main-color-light"
                                    type="submit" name="submit" form="aanbiedingenToevoegen">
                                <span class="mdc-button__label">Toevoegen</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete User -->
    <div class="modal" tabindex="-1" role="dialog" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Weet je het zeker?</h5>
                </div>
                <div class="modal-body p-5 row">
                    <img src="Assets/img/delete_icon.svg" alt="DELETE ICON"
                         class="img-thumbnail no-border justify-content-center" width="75">
                    <p class="col-10 text-center bRoboto pt-3">Wilt u dit record echt verwijderen? Dit proces kan niet
                        ongedaan worden gemaakt.</p>
                </div>
                <div class="modal-footer">
                    <form>
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help main-color-light"
                                data-dismiss="modal">
                            <span class="mdc-button__label">Sluiten</span>
                        </button>
                        <button class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help error"
                                type="submit" name="submit" id="deleteAanbieding">
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
                <h5 class="modal-title" id="exampleModalLabel">Aanbieding Aanpassen</h5>
            </div>
            <div class="modal-body p-4">
                <form action="Controllers/medewerker_toevoegen.php" method="POST" id="addAanbieding">
                    <!-- Voornaam & Achternaam -->
                    <div class="row justify-content-center">
                        <div class="mdc-text-field mr-2 mt-2">
                            <input type="text" name="codeinputAanpassen" id="codeinputAanpassen" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Kortingscode
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="mdc-text-field mt-2">
                            <input type="text" name="amountinputAanpassen" id="amountinputAanpassen" class="mdc-text-field__input" value="">
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Bedrag
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="btn-group btn-group-toggle mt-2 w-91" data-toggle="buttons" id="valid">
                            <label class="btn btn-secondary" id="ongeldig">
                                <input type="radio" name="validInputAanpassen" value="0" autocomplete="off">Ongeldig
                            </label>
                            <label class="btn btn-secondary" id="geldig">
                                <input type="radio" name="validInputAanpassen" value="1" autocomplete="off">Geldig
                            </label>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="date" name="creationdateGeldigvanafInput" id="creationdateGeldigvanafInput" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"></label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field-helper-line">
                            <div class="mdc-text-field-helper-text">Geldig vanaf</div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="date" name="creationdateGeldigtotInput" id="creationdateGeldigtotInput"
                                   class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"></label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field-helper-line">
                            <div class="mdc-text-field-helper-text">Geldig tot</div>
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
                    <span class="mdc-button__label">Toevoegen</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Bekijken Modal -->
<div class="modal fade" id="bekijkenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aanbieding Bekijken</h5>
            </div>
            <div class="modal-body p-4">
                <form action="Controllers/medewerker_toevoegen.php" method="POST" id="addAanbieding">
                    <!-- Voornaam & Achternaam -->
                    <div class="row justify-content-center">
                        <div class="mdc-text-field mr-2 mt-2">
                            <input type="text" name="codeinputBekijken" id="codeinputBekijken" class="mdc-text-field__input" value="" disabled>
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Kortingscode
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="mdc-text-field mt-2">
                            <input type="text" name="amountinputBekijken" id="amountinputBekijken" class="mdc-text-field__input" value="" disabled>
                            <label class="mdc-floating-label mdc-floating-label--float-above" for="pre-filled">
                                Bedrag
                            </label>
                            <div class="mdc-line-ripple"></div>
                        </div>
                        <div class="btn-group btn-group-toggle mt-2 w-91" data-toggle="buttons" id="valid">
                            <label class="btn btn-secondary" id="ongeldigBekijken">
                                <input type="radio" name="validInputBekijken" value="0" autocomplete="off" disabled>Ongeldig
                            </label>
                            <label class="btn btn-secondary" id="geldigBekijken">
                                <input type="radio" name="validInputBekijken" value="1" autocomplete="off" disabled>Geldig
                            </label>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="date" name="creationdateGeldigvanafInputBekijken" id="creationdateGeldigvanafInputBekijken" class="mdc-text-field__input" disabled>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"></label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field-helper-line">
                            <div class="mdc-text-field-helper-text">Geldig vanaf</div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="date" name="creationdateGeldigtotInputBekijken" id="creationdateGeldigtotInputBekijken" class="mdc-text-field__input" disabled>
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label"></label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field-helper-line">
                            <div class="mdc-text-field-helper-text">Geldig tot</div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal"
                        class="foo-button mdc-button mdc-button--unelevated mdc-ripple-upgraded help error">
                    <span class="mdc-button__label">Sluiten</span>
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
<script type="text/javascript" src="JS/datatable/datatable_aanbiedingen.js  "></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
<!-- Sidebar & Nav -->
<script src="JS/sidebar.js"></script>
<script src="JS/nav.js"></script>
<!-- Material -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="JS/google-material/index.js"></script>
</body>
</html>