<?php

require_once('dbconnect.php');
if (isset($_POST['submit'])) {

    $bikenameInput = $_POST['bikenameInput'];
    $brand = $_POST['brandInput'];
    $type = $_POST['biketype'];
    $frametype = $_POST['frametypeInput'];
    $color = $_POST['colorInput'];
    $gears = $_POST['gearsInput'];
    $price = $_POST['priceInput'];
    $description = $_POST['descriptionInput'];
    $image;

    // Set beschadigd
    if ($_POST['damaged'] == 1) {
        $damaged = 1;
    } elseif ($_POST['damaged'] == 0) {
        $damaged = 0;
    }

    // Set biketype
    // 0 = Damesfiets, 1 = Herenfiets, 2 = Kinderfiets
    if ($_POST['biketype'] == 0) {
        $type = 0;
        $image = 'assets/img/bike_girls.png';
    } elseif ($_POST['biketype'] == 1) {
        $type = 1;
        $image = 'assets/img/bike_men.png';
    } elseif ($_POST['biketype'] == 2) {
        $type = 2;
        $image = 'assets/img/bike_boys.png';
    }


    $sql = "INSERT INTO bikes(image_path, bikename, brand, framenumber, color, gears, selling_price, damaged, biketype, description) VALUES('$image','$bikenameInput', '$brand', '$frametype', 
'$color', '$gears', 
'$price', '$damaged', '$type', '$description')";

    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../fietsen.php');
        }
    } else {
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
    }

}