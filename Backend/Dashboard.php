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
    <link rel="stylesheet" href="scss/backend.css">
    <title>Fietsenwinkel - Dashboard</title>
</head>
<body>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper" class="sidebarAnimation">
        <ul class="sidebarUl">
            <div class="sidebarProfilePicture">
                <img src="Assets/img/profile-image-placeholder.png" class="profile-picture">
            </div>
            <li class="sidebarLi active">
                <a class="accordion-toggle collapsed toggle-switch" href="#">
                    <div class="sidebarData">
                        <span class="sidebar-icon"><i class="fas fa-home iconwidth"></i></span>
                        <span class="sidebar-title">Home</span>
                        <b class="caret"></b>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!--   Hier eindigt de Not minified sidebar-->
    <!-- Navbar-->
    <nav class="navbar navbar-light bg-light justify-content-between">
        <div class="sidebarChevron">
            <a href="#menu-toggle" id="menu-toggle" class="aSidebarChevron">
                <i class="fas fa-chevron-left"></i>
            </a>
        </div>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <button class="btn btn-primary nav-buttons ml-4" type="button"><span><i class="fas fa-user"></i></span>Account
            </button>
            <button class="btn btn-primary nav-buttons ml-4" type="button"><span><i class="fas fa-question"></i></span>Help
            </button>
        </form>
    </nav>
    <!-- End of the navbar -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h4 class="text-white">Collapsed content</h4>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
    </div>
    <div class="container-fluid body">
        <div class="row widgets">
            <div class="col">
                <div class="card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-users cardWidget"></i>
                            <h1 class="card-title dashboard numbers">31</h1>
                        </div>
                        <h3 class="card-title dashboard">Bezoekers</h3>
                        <p class="card-text">Op dit moment</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-box cardWidget"></i>
                            <h1 class="card-title dashboard numbers">94</h1>
                        </div>
                        <h3 class="card-title dashboard">Bestellingen</h3>
                        <p class="card-text">In de afgelopen week</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-star-half-alt cardWidget"></i>
                            <h1 class="card-title dashboard numbers">16</h1>
                        </div>
                        <h3 class="card-title dashboard">Reviews</h3>
                        <p class="card-text">In de afgelopen week</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white mb-3">
                    <div class="card-body dashboard">
                        <div class="card-icons">
                            <i class="fas fa-money-bill-wave cardWidget"></i>
                            <h1 class="card-title dashboard numbers">&euro; 6134</h1>
                        </div>
                        <h3 class="card-title dashboard">Netto winst</h3>
                        <p class="card-text">In de afgelopen week</p>
                    </div>
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
    <!-- Side Bar -->
    <script src="js/sidebar.js"></script>
    <script>
        $('#menu-toggle').click(function () {
            if ($(window).width() >= 500) { //your chosen mobile res
                $('#sidebar-wrapper').toggleClass('clicked');
                $('.nav-link').toggleClass('display');
            } else {
                $('#sidebar-wrapper').animate({
                    width: 'toggle'
                }, 350);
            }
        });
    </script>
</body>
</html>