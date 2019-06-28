<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 27/06/2019
 * Time: 14:52
 */

session_start();
require_once("dbconnect.php");
if (!isset($_SESSION['cart'])) {
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
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
        $bike_price = $row['selling_price'];}
}
$deleteItem = array_search($id, $_SESSION['cart']);
unset($_SESSION['cart'][$deleteItem]);
$_SESSION['total_price'] -= $bike_price;
$status = "product deleted";
json_encode($status);
header('Location: ' . $_SERVER['HTTP_REFERER']);