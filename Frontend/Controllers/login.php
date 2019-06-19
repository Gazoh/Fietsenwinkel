<?php
once("dbconnect.php");
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
    $sql = "SELECT * FROM customers WHERE email = '$email'";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if($count >0) {
        // Bekijken of de wachtwoorden overeenkomen met user input en database hashed password
        $hashedPasswordCheck = password_verify($password, $row["password"]);
        if($hashedPasswordCheck == false)
        {
            $_SESSION['loginstatus'] = "false";
            header("Location: ../");
        }
        elseif($hashedPasswordCheck == true)
        {
            session_start();
            $date = date("Y-m-d H:i:s");
            $sql = "UPDATE customers SET last_login = '$date' WHERE email = '$email'";
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
                    $sql = "UPDATE customers SET remember_me = '$token' WHERE email = '$email'";
                    if($con->query($sql) === TRUE)
                    {
                        header('Location: ../');
                    }
                }
                elseif($rememberme == "on")
                {
                    $str = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789";
                    $str = str_shuffle($str);
                    $token = substr($str, 0, 10);
                    $token = md5($token);
                    setcookie("rememberMe", "$token", time()+2592000); // Set Remember me cookie with the hashed token for 1 month
                    $sql = "UPDATE customers SET remember_me = '$token' WHERE email = '$email'";
                    if($con->query($sql) === TRUE)
                    {
                        header('Location: ../');
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
