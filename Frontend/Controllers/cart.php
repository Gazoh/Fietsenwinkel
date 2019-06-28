<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 27/06/2019
 * Time: 12:56
 */
session_start();
require_once("dbconnect.php");
if (!isset($_SESSION['cart'])) {
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
        $_SESSION['total_price'] = 0;
    }
}
$id = $_GET['id'];
if ($_GET['id']) {
    $sql = "SELECT * FROM bikes WHERE id = '$id'";
    $sqlres = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($sqlres)) {
        $bike_id = $row['id'];
        $bike_image = $row['image_path'];
        $bike_brand = $row['brand'];
        $bike_name = $row['bikename'];
        $bike_framenumber = $row['framenumber'];
        $bike_price = $row['selling_price'];
        $_SESSION['total_price'] += $bike_price;
    }
    if (!in_array($bike_id, $_SESSION['cart'], true)) {
        if (array_push($_SESSION['cart'], $_GET['id'])) {
            $_SESSION['cartstatus']= "product added";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    else if(in_array($bike_id, $_SESSION['cart'], true)){
        $_SESSION['cartstatus'] = "product already in cart";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

