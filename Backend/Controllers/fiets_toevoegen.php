<?php

require_once('dbconnect.php');
if (isset($_POST['submit'])) {

    $bikenameInput = $_POST['bikenameInput'];
    $brand = $_POST['brandInput'];
    $type = $_POST['typeInput'];
    $frametype = $_POST['frametypeInput'];
    $color = $_POST['colorInput'];
    $gears = $_POST['gearsInput'];
    $price = $_POST['priceInput'];
    $damaged = $_POST['damagedInput'];

    $sql = "INSERT INTO bikes(bikename, brand, framenumber, color, damaged, gears, selling_price, damaged) VALUES('$bikenameInput', '$brand', '$frametype', '$color', 1, '$gears', '$price', '$damaged')";

    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../fietsen.php');
        }
    } else {
        echo 'wrong';
    }

}