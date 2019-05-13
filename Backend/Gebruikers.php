<?php
require_once("Controllers/dbconnect.php");
// Ophalen van users uit database en die in $records zetten om er later doorheen te loopen.
$records = $con->query("SELECT * FROM users");
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
    <!--  Fonts & Eigen CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="scss/backend.css">
    <!--  Datatable  -->
    <link rel="stylesheet" href="css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
    <!--   Title -->
    <title>Fietsenwinkel - Gebruikers</title>
</head>
<body>
<div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <!-- Minified Menu -->
        <a href="#menu-toggle" id="menu-toggle2">
            <span><i class="fas fa-angle-right"></i></span>
        </a>
        <!-- Not Minified Menu -->
        <ul class="sidebarUl">
            <div class="sidebarProfilePicture">
                <img src="Assets/img/profile-image-placeholder.png" class="profile-picture">
                <h5 class="sidebarUsername">Admin</h5>
                <p class="adminVersie">v0.0.1</p>
                <div class="sidebarChevron">
                    <a href="#menu-toggle" id="menu-toggle" class="aSidebarChevron">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </div>
            </div>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="dashboard.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-home iconwidth"></i></span>
                        <span class="sidebar-title">Home</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi active">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-user iconwidth"></i></span>
                        <span class="sidebar-title">Gebruikers</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="klanten.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-users iconwidth"></i></span>
                        <span class="sidebar-title">Klanten</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi" id="bestellingen" data-toggle="collapse" href="#submenu-2">
                <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fa fa-box iconwidth"></i></span>
                        <span class="sidebar-title">Bestellingen</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <ul id="submenu-2" class="panel-collapse collapse panel-switch submenu-bestellingenUl" role="menu">
                <li class="submenu-bestellingenLi openstaand">
                    <a href="bestellingen_openstaand.php">
                        <div class="sidebarData">
                            <span class="sidebar-icon bestellingen"><i
                                        class="fas fa-times-circle iconwidthBestellingen"></i></span>
                            <span class="sidebar-title">Openstaand</span>
                        </div>
                    </a>
                </li>
                <li class="submenu-bestellingenLi afgerond">
                    <a href="bestellingen_afgerond.php">
                        <div class="sidebarData">
                            <span class="sidebar-icon bestellingen"><i
                                        class="fas fa-check iconwidthBestellingen"></i></span>
                            <span class="sidebar-title">Afgerond</span>
                        </div>
                    </a>
                </li>
            </ul>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="fietsen.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-bicycle iconwidth"></i></span>
                        <span class="sidebar-title">Fietsen</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="aanbiedingen.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-tag iconwidth"></i></span>
                        <span class="sidebar-title">Aanbiedingen</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="reviews.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-star-half-alt iconwidth"></i></span>
                        <span class="sidebar-title">Reviews</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi">
                <a class="accordion-toggle collapsed toggle-switch" href="nieuwsbrief.php">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-newspaper iconwidth"></i></span>
                        <span class="sidebar-title">Nieuwsbrief</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
            <li class="sidebarLi uitloggen">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-sign-out-alt iconwidth"></i></span>
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
        <h3 class="logo">Gebruikte Fietsen</h3>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <button class="btn btn-primary nav-buttons ml-4" type="button"><span><i class="fas fa-user"></i></span>Account
            </button>
            <button class="btn btn-primary nav-buttons ml-4" type="button"><span><i class="fas fa-question"></i></span>Help
            </button>
        </form>
    </nav>
    <!--   Datatable -->
    <div class="row gebruikers">
        <div class="card text-black mb-5 mt-5">
            <div class="card-header" id="card-header">
                <button class="toevoegen" id="toevoegen"><span><i class="fas fa-plus"></i></span>Toevoegen</button>
                <div class="selectDatatable">
                    <select class="form-control">
                        <option value="" disabled selected id="opties">Opties</option>
                        <option value="Aanpassen" id="aanpassen">Aanpassen</option>
                        <option value="Verwijderen" id="verwijderen">Verwijderen</option>
                    </select>
                </div>
                <button id="uitvoeren" class="uitvoeren">Uitvoeren</button>
            </div>
            <div id="datatable-card" class="card-body-table">
                <table id="gebruikers" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>E-mail</th>
                        <th>Telefoonnummer</th>
                        <th>Gebruikersnaam</th>
                        <th>Rol</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while (  $row =  mysqli_fetch_assoc($records)    )
                    {
                        $users[] = $row;
                        foreach ($users as $user):
                            ?>
                            <tr>
                                <td></td>
                                <td><?php echo $user['id'] ?></td>
                                <td><?php echo $user['first_name']?></td>
                                <td><?php echo $user['last_name']?></td>
                                <td><?php echo $user['email']?></td>
                                <td><?php echo $user['phone']?></td>
                                <td><?php echo $user['username']?></td>
                                <td><?php if($user['role'] == 0)
                                        {echo "Klant";}
                                        elseif($user['role'] == 1)
                                    {echo "Beheerder";}?>
                                </td>
                            </tr>

                        <?php endforeach;
                    }
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>E-mail</th>
                        <th>Telefoonnummer</th>
                        <th>Gebruikersnaam</th>
                        <th>Rol</th>
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
        <script type="text/javascript" src="js/datatable/datatable_gebruikers.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
        <!-- Side Bar -->
        <script src="js/sidebar.js"></script>
</body>
</html>