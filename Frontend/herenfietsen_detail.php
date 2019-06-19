<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <!-- Material.io -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <!-- Eigen CSS-->
    <link rel="stylesheet" href="scss/style.css">
    <!--  FontAwesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" type='text/css' media='all'>
    <title>Heren Fietsen</title>
</head>
<body>
<!--  Nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img class="image" src="assets/img/logo.png" width="" alt="logo">
    </a>
    <div id="navbar-buttons">
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Damesfietsen.html">Damesfietsen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Herenfietsen.html">Herenfietsen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Kinderfietsen.html">Kinderfietsen</a>
            </li>
        </ul>
        <div class="navbar-buttons-top" id="navbar-buttons-top">
            <button class="foo-button mdc-button mdc-button--outlined mdc-ripple-upgraded account mr-2">
                <i class="fas fa-user"></i>
                <span class="pr-2"></span>
                <span class="mdc-button__label">Account</span>
            </button>
            <button class="foo-button mdc-button mdc-button--outlined mdc-ripple-upgraded account">
                <i class="fas fa-shopping-bag fontSize1-2rem"></i>
            </button>
        </div>
    </div>
</nav>
<!-- Alert -->
<div class="alert alert-dark" role="alert" id="alert">
    <div class="text-black">
        <div>
            <div class="float-left mr-3">
                <span class="bold">Ruim assortiment</span> met de beste A merken
            </div>
            <div class="float-left mr-3">
                Tot <span class="bold">14 dagen</span> ruilen en retourneren
            </div>
            <div class="float-left gratisVerzenden mr-3">
                <span class="bold">Gratis verzenden</span>
            </div>
            <div class="float-right main-color gebruikteFiets">
                <span class="bold">Op een gebruikte fiets moet je het leren!</span>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="content_top">
        <div class="row">
            <div class="col-12 col-sm-12 col-md- col-lg-6">
                <img src="img/bike_women.png" class="fiets_afbeelding">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="prijs_info">
                    <div class="prijs_info_top">
                        <p class="head"><strong>Lorem</strong> ipsum adiscing elit ligula eros<br>
                            vestibulum mi</p>
                        <p class="schade">Onbeschadigd</p>
                        <p><s>&euro;1276,-</s><br>&euro;1087,-</p>
                        <button class="winkelwagen_button">In Winkelwagen</button>
                    </div>
                    <div class="prijs_info_bottom">
                        <ul class="checks_ul">
                            <li class="checks"><strong>Gratis</strong> verzenden</li>
                            <li class="checks">Tot <strong>14 dagen</strong> ruilen en retourneren</li>
                            <li class="checks">Niet goed = <strong>geld terug</strong></li>
                            <li class="checks"><strong>Klantenbeoordeling 9.1 uit 7532 reviews</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="content_mid">
                <p><strong>Productomschrijving</strong></p>
                <p>
                    Lorem ipsum dolor sit amet, nec rutrum elit. Nullam ex enim, porttitor at turpis sed, volutpat finibus erat. Nunc ac tortor quam.<br>
                    Pellentesque eros augue, tempus sed bibendum vel, rhoncus vel orci. Vestibulum ante ipsum primis in faucibus orci luctus et<br>
                    ultrices posuere cubilia Curae; Cras elementum nisl sollicitudin leo suscipit rutrum. Nunc magna ex, fermentum ut pulvinar, iaculis<br>
                    sit amet risus. Nam ullamcorper bibendum tellus non vestibulum. Vestibulum sed diam quam. Sed ut metus ipsum. Vestibulum<br>
                    velit mi, congue a orci eget, consectetur mattis quam. Nunc dignissim turpis ac luctus commodo. Cras luctus lacus a nisi vestibulum<br>
                    porttitor. Praesent id tempor odio. Ut feugiat euismod ipsum sit amet tincidunt. Proin dui enim, fermentum vitae nisl in, eleifend<br>
                    efficitur eros. Nulla erat libero, varius convallis leo sit amet, porta sodales felis. Donec vel lacus libero. Nunc gravida turpis non<br>
                    urna vulputate ornare. Duis cursus massa maximus, ornare erat pharetra, placerat arcu.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="content_bottom">
    <p><strong>Specificaties</strong></p>
    <table class="specificaties" cellspacing="0">
        <tr>
            <th class="table_grey">Lorum ipsum</th>
            <td class="table_grey">Lorem ipsum dolor</td>
        </tr>
        <tr>
            <th class="table_white">Lorum ipsum dolor</th>
            <td class="table_white">Lorem ipsum dolor sit amet porttitor at</td>
        </tr>
        <tr>
            <th class="table_grey">Lorum</th>
            <td class="table_grey">Lorem ipsum dolor sit amet</td>
        </tr>
        <tr>
            <th class="table_white">Lorum ipsum</th>
            <td class="table_white">Lorem ipsum dolor sit</td>
        </tr>
        <tr>
            <th class="table_grey">Lorum ipsum dolor</th>
            <td class="table_grey">Lorem ipsum</td>
        </tr>
        <tr>
            <th class="table_white">Lorum ipsum</th>
            <td class="table_white">Lorem ipsum dolor sit amet</td>
        </tr>
        <tr>
            <th class="table_grey">Lorum ipsum</th>
            <td class="table_grey">Lorem ipsum dolor</td>
        </tr>
        <tr>
            <th class="table_white">Lorum</th>
            <td class="table_white">Lorem ipsum dolor sit amet porttitor at</td>
        </tr>
    </table>
</div>
<div class="nieuwsbrief_linkjes">
    <div class="row">
        <div class="col-sm-12">
            <p class="nieuwsbrief_head">Nieuwsbrief</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit duis eu max.<br>
                In blandit, eros eget vestibulum mollis, purus nunc conse<br>
                egestasant magna. Fusce suscipit mi et dolor iaculis.
            </p>
            <input type="email" placeholder="E-mailadres">
            <button class="nieuwsbrief_button">Inschrijven</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-12">
            <table align="center">
                <tr>
                    <th>Klantenservice</th>
                    <th>Bestellen en betalen</th>
                    <th>Populaire merken</th>
                    <th>Over ons</th>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td>Bestellen</td>
                    <td>Gazelle</td>
                    <td>Gebruikte Fietsen BV</td>
                </tr>
                <tr>
                    <td>Garantie</td>
                    <td>Betaling</td>
                    <td>Scott</td>
                    <td>Lorem ipsum dolor xx</td>
                </tr>
                <tr>
                    <td>Onderhoud</td>
                    <td>Verzenden & bezorging</td>
                    <td>Cortina</td>
                    <td>xxxx xx Lorem</td>
                </tr>
                <tr>
                    <td>Reparatie</td>
                    <td>Retouren</td>
                    <td>Batavus</td>
                    <td>Nederland</td>
                </tr>
                <tr>
                    <td>Fietsverzekering</td>
                    <td>Leasen</td>
                    <td>Stromer</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Privacy verklaring</td>
                    <td>Financieren</td>
                    <td></td>
                    <td>Tel nr: +31 (0)12 345 6789</td>
                </tr>
                <tr>
                    <td>Algemene voorwaarden</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="footer">
    <p class="copyright">Copyright &copy; 2018 Gebruikte Fietsen</p>
    <div class="footer_right">
        <ul>
            <li>Privacy</li>
            <li>Cookies</li>
            <li>FAQ</li>
            <li>Terms of use</li>
        </ul>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Material.io -->
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="js/material/material.js"></script>
<!-- Main -->
<script type="text/javascript" src="js/Main.js"></script>
</body>
</html>