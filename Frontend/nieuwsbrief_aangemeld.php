<?php
/**
 * Created by PhpStorm.
 * User: luuka
 * Date: 26-6-2019
 * Time: 11:50
 */
require_once("Controllers/dbconnect.php");
$email = $_POST['email'];
$sql = "INSERT INTO newsletter_receivers (email)
        VALUES $email";
$res = mysqli_query($con, $sql);