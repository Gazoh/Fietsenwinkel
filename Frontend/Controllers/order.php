<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 27/06/2019
 * Time: 23:23
 */
session_start();
require_once("dbconnect.php");
require_once("userdata.php");
$totalprice = $_SESSION['total_price'];
$userid = $_SESSION['user_id'];
if($_SESSION['loginstatus'] == 1)
{
    $sql = "INSERT INTO orders(customer_id, totalamount, order_paid) VALUES('$userid', '$totalprice', 1)";
    if(mysqli_query($con, $sql))
    {
        $last_id = $con->insert_id;
        foreach($_SESSION['cart'] as $value){
            $sql = "INSERT INTO order_bikes(customerid, orderid, bikeid) VALUES('$userid','$last_id', '$value')";
            if(mysqli_query($con, $sql))
            {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }

    }
}