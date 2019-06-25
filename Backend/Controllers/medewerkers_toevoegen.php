<?php

require_once("dbconnect.php");
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstnameInput'];
    $lastname = $_POST['lastnameInput'];
    $email = $_POST['emailInput'];
    $phone = $_POST['phoneInput'];
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];
    $adress = $_POST['adresInput'];
    $housenumber = $_POST['housenumberInput'];
    $postal = $_POST['postalInput'];
    $date = date("Y-m-d H:i:s");
    $password = stripslashes($password);
    $hashedpw = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO employees(username) VALUES ('$username');";
    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../');
        }
    }
}
