<?php
require_once("Controllers/dbconnect.php");
// Ophalen van fietsen uit database en die in $records zetten om er later doorheen te loopen.
$records = $con->query("SELECT * FROM bikes");
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" type='text/css' media='all'>
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
        <div class="justify-content-end">
            <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded account">
                <i class="fas fa-user"></i>
                <span class="pr-2"></span>
                <span class="mdc-button__label">Account</span>
            </button>
            <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded help">
                <i class="fas fa-question"></i>
                <span class="pr-2"></span>
                <span class="mdc-button__label">Help</span>
            </button>
        </div>
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
                <button class="foo-button mdc-button mdc-button--raised mdc-ripple-upgraded uitvoeren" id="uitvoeren"
                        data-toggle="modal" data-target="#toevoegenModal">
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
                        <th>Naam</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Frametype</th>
                        <th>Kleur</th>
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
                            <td><?php echo $row['bikename'] ?></td>
                            <td><?php echo $row['brand'] ?></td>
                            <td><?php if ($row['biketype'] == 0) {
                                    echo "Damesfiets";
                                } elseif ($row['biketype'] == 1) {
                                    echo "Herenfiets";
                                } ?></td>
                            <td><?php echo $row['framenumber'] ?></td>
                            <td><?php echo $row['color'] ?></td>
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
                        <th>Naam</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Frametype</th>
                        <th>Kleur</th>
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
                    <!-- Voornaam & Achternaam -->
                    <div class="row justify-content-center">
                        <div class="mdc-text-field mdc-text-field--outlined mr-2">
                            <input type="text" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Naam</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined">
                            <input type="text" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Merk</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="email" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Type</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Frametype</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Kleur</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="mdc-text-field mdc-text-field--outlined mt-2 w-91">
                            <input type="text" id="tf-outlined" class="mdc-text-field__input">
                            <div class="mdc-notched-outline">
                                <div class="mdc-notched-outline__leading"></div>
                                <div class="mdc-notched-outline__notch">
                                    <label for="tf-outlined" class="mdc-floating-label">Prijs</label>
                                </div>
                                <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                    <button type="button" class="btn btn-primary">Opslaan</button>
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