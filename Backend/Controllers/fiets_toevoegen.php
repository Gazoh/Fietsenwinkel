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
    debug_to_console($_POST['damaged']);
    // Set beschadigd
    if($_POST['damaged'] == 1)
    {
        $damaged = 1;
    } elseif ($_POST['damaged'] == 0)
    {
        $damaged = 0;
    }

    // Set biketype
    // 0 = Damesfiets, 1 = Herenfiets, 2 = Kinderfiets
    if($_POST['biketype'] == 0) {
        $type = 0;
    } elseif($_POST['biketype'] == 1) {
        $type = 1;
    } elseif($_POST['biketype'] == 2) {
        $type = 2;
    }


    $sql = "INSERT INTO bikes(bikename, brand, framenumber, color, gears, selling_price, damaged, biketype) VALUES('$bikenameInput', '$brand', '$frametype', '$color', '$gears', '$price', 
'$damaged', '$type')";

    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../fietsen.php');
        }
    } else {
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
    }

}