<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registreren - CMS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Eigen CSS-->
    <link rel="stylesheet" href="scss/backend.css">
    <!-- Material Kit CSS -->
    <link href="css/material-kit/material-kit.css?v=2.0.5" rel="stylesheet"/>
</head>
<body>
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 mt-30">
            <div class="form-group">
                <div class="card border-radius07">
                    <div class="card-header text-uppercase image-align-center card-header-image img-fluid text-white border-radius-image" style="background-image: url('assets/img/login-bg.jpg')">
                        Registreren
                    </div>
                    <form action="controllers/register.php" method="post">
                        <div class="form-group form-login mt-30">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Invite code</label>
                                <input type="text" name="inviteCode" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Voornaam</label>
                                <input type="text" name="firstNameInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Achternaam</label>
                                <input type="text" name="lastNameInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Stad</label>
                                <input type="text" name="cityInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Adres</label>
                                <input type="text" name="adressInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Postcode</label>
                                <input type="text" name="zipcodeInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Telefoonnummer</label>
                                <input type="text" name="phoneInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Gebruikersnaam</label>
                                <input type="text" name="usernameInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Email</label>
                                <input type="text" name="emailInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Wachtwoord</label>
                                <input type="password" name="passwordInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating disabled">Herhaal wachtwoord</label>
                                <input type="password" name="repasswordInput" class="form-control controller" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn main-color width300 mb-4 btn-round login-button">Submit</button>
                        </div>
                    </form>
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
<script src="http://bbeyogullari.gcmediavormgeving.nl/Backend/JS/plugins/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>
</html>