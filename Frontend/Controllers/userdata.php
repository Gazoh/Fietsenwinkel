<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 27/06/2019
 * Time: 11:07
 */
require_once("dbconnect.php");
if(isset($_SESSION['loginstatus']))
{
    if($_SESSION['loginstatus'] == 1)
    {
        $idsession = $_SESSION['user_id'];
        $sql = "SELECT * FROM customers WHERE id = '$idsession'";
        $sqlres = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($sqlres))
        {
            $user_id = $row['id'];
            $user_first_name = $row['first_name'];
            $user_last_name = $row['last_name'];
            $user_username = $row['username'];
            $user_adress = $row['adress'];
            $user_city = $row['city'];
            $user_house_number = $row['house_number'];
            $user_zip_code = $row['zip_code'];
            $user_email = $row['email'];
            $user_email_verified = $row['email_verified'];
            $user_phone = $row['phone'];
            $user_register_date = $row['register_date'];
            $user_last_login = $row['last_login'];
        }
    }
}