<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 21/05/2019
 * Time: 22:53
 */
require_once("dbconnect.php");
session_start();
if(isset($_POST['submit'])) {
    // Verkrijgen van de data vanuit de login form en toewijzen aan variabelen
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    if(isset($_POST['rememberMe']))
    {
        $rememberme = $_POST['rememberMe'];
    }
    elseif(!isset($_POST['rememberMe']))
    {
        $rememberme = "off";
    }
    $sql = "SELECT * FROM users WHERE email = '$email'";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if($count >0) {
        // Bekijken of de wachtwoorden overeenkomen met user input en database hashed password
        $hashedPasswordCheck = password_verify($password, $row["password"]);
        if($hashedPasswordCheck == false)
        {
            $_SESSION['loginstatus'] = "false";
            header("Location: ../login.php");
        }
        elseif($hashedPasswordCheck == true)
        {
            session_start();
            $date = date("Y-m-d H:i:s");
            $sql = "UPDATE users SET last_login = '$date' WHERE email = '$email'";
            if($con->query($sql) === TRUE)
            {
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
                if($rememberme == "off")
                {
                    $str = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789";
                    $str = str_shuffle($str);
                    $token = substr($str, 0, 10);
                    $token = md5($token);
                    setcookie("rememberMe", "$token", time()+3600); // Set Remember me cookie with the hashed token for 1 hour.
                    $sql = "UPDATE users SET remember_me = '$token' WHERE email = '$email'";
                    if($con->query($sql) === TRUE)
                    {
                        header('Location: ../dashboard.php');
                    }
                }
                elseif($rememberme == "on")
                {
                    $str = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789";
                    $str = str_shuffle($str);
                    $token = substr($str, 0, 10);
                    $token = md5($token);
                    setcookie("rememberMe", "$token", time()+2592000); // Set Remember me cookie with the hashed token for 1 month
                    $sql = "UPDATE users SET remember_me = '$token' WHERE email = '$email'";
                    if($con->query($sql) === TRUE)
                    {
                        header('Location: ../dashboard.php');
                    }
                }
            }
        }
    }
    else{
        $_SESSION['loginstatus'] = "false";
        header('Location: ../login.php');
    }
}
?>
