<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - CMS</title>
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
        <form class="col-10">
            <div class="form-group">
                <div class="card border-radius07">
                    <div class="card-header text-uppercase image-align-center card-header-image img-fluid text-white border-radius-image"
                         style="background-image: url('assets/img/login-bg.jpg')">
                        LOGIN
                    </div>
                    <form>
                        <div class="form-group form-login mt-30">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">E-mail</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group form-login">
                            <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating">Wachtwoord</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-check form-login onthoud-mij">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="checked">
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
                            <button type="submit" class="btn main-color width300 mb-4 btn-round login-button">Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!--   Core JS Files   -->
<script src="js/plugins/popper.min.js" type="text/javascript"></script>
<script src="js/plugins/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="js/plugins/moment.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/plugins/nouislider.min.js" type="text/javascript"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
<script src="js/plugins/material-kit.js?v=2.0.5" type="text/javascript"></script>
</body>
</html>