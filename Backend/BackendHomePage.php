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
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--  Fonts & Eigen CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="CSS/BackendCSS.scss">
    <title>Fietsenwinkel - CMS</title>
</head>
<body>
<div class="container-fluid">
    <!--  Sidebar  -->
    <div id="sidebar">
        <ul class="sidebarUl">
            <li class="sidebarLi">
                <div class="sidebarProfilePicture">
                    <img src="Assets/img/profile-image-placeholder.png" class="profile-picture">
                    <h5 class="sidebarUsername">Admin</h5>
                    <p class="adminVersie">v0.0.1</p>
                </div>
            </li>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-home"></span></i>Home</li>
            </a>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-user"></span></i>Gebruikers</li>
            </a>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-users"></span></i>Klanten</li>
            </a>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-box"></span></i>Bestellingen</li>
            </a>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-bicycle"></span></i>Fietsen</li>
            </a>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-tag"></span></i>Aanbiedingen</li>
            </a>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-star-half-alt"></span></i>Reviews</li>
            </a>
            <a href="#">
                <li class="sidebarLi"><span class="sidebarIcons"><i class="fas fa-newspaper"></span></i>Nieuwsbrief</li>
            </a>
            <a href="#">
                <li class="sidebarLiUitloggen"><span class="sidebarIcons"><i class="fas fa-sign-out-alt"></i></span></i>
                    Uitloggen
                </li>
            </a>
        </ul>
    </div>
</div>
<!-- End of the sidebar-->
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Navbar</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
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
</body>
</html>