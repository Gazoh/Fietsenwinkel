<?php
require_once("Controllers/dbconnect.php");

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

    if ($count > 0) {
        if ($token == $row['remember_me']) {
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            header("Location: index.php");

        }
    }
}
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - CMS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Eigen CSS-->
    <link rel="stylesheet" href="scss/backend.css">
    <!-- Material Kit CSS -->
    <link href="css/material-kit/material-kit.css?v=2.0.5" rel="stylesheet"/>

</head>
<body class="login">
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10">
            <div class="form-group">
                <div class="card border-radius07">
                    <div class="card-header text-uppercase image-align-center card-header-image img-fluid text-white border-radius-image"
                         style="background-image: url('http://bbeyogullari.gcmediavormgeving.nl/Backend/Assets/img/login-bg.jpg')">
                        LOGIN
                    </div>
                    <form action="Controllers/login.php" method="POST">
                        <div class="form-group form-login mt-30">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">E-mail</label>
                                <input type="text" name="emailInput" class="form-control">
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Wachtwoord</label>
                                <input type="password" name="passwordInput" class="form-control">
                            </div>
                        </div>
                        <div class="form-check form-login onthoud-mij">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="rememberMe">
                                Onthoud mij
                                <span class="form-check-sign">
                                   <span class="check"></span>
                                </span>
                            </label>
                            <a href="wachtwoord_vergeten.php">
                                <p class="float-right">Wachtwoord vergeten?</p>
                            </a>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn main-color width300 mb-4 btn-round login-button">Inloggen
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <button type="button" id="activatebutton" class="btn main-color width300 mb-4 btn-round login-button">Activeer account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--   Core JS Files   -->
<script src="http://bbeyogullari.gcmediavormgeving.nl/Backend/JS/plugins/popper.min.js" type="text/javascript"></script>
<script src="http://bbeyogullari.gcmediavormgeving.nl/Backend/JS/plugins/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="http://bbeyogullari.gcmediavormgeving.nl/Backend/JS/plugins/moment.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="http://bbeyogullari.gcmediavormgeving.nl/Backend/JS/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="http://bbeyogullari.gcmediavormgeving.nl/Backend/JS/plugins/material-kit.min.js" type="text/javascript"></script>
</body>
</html>