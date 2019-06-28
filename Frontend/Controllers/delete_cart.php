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
$deleteItem = array_search($id, $_SESSION['cart']);
unset($_SESSION['cart'][$deleteItem]);
$status = "product deleted";
json_encode($status);
header('Location: ' . $_SERVER['HTTP_REFERER']);