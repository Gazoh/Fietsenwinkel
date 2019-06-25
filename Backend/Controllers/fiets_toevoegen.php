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
    debug_to_console($_POST['damaged']);
    if($_POST['damaged'] == 1)
    {
        $damaged = 1;
    } elseif ($_POST['damaged'] == 0)
    {
        $damaged = 0;
    }

    $sql = "INSERT INTO bikes(bikename, brand, framenumber, color, gears, selling_price, damaged) VALUES('$bikenameInput', '$brand', '$frametype', '$color', '$gears', '$price', '$damaged')";

    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../fietsen.php');
        }
    } else {
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
    }

}