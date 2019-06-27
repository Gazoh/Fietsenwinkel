<?php

require_once("dbconnect.php");
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstnameInput'];
    $lastname = $_POST['lastnameInput'];
    $email = $_POST['emailInput'];
    $phone = $_POST['phoneInput'];
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];
    $zipcode = $_POST['zipcodeInput'];
    $city = $_POST['cityInput'];
    $date = date("Y-m-d H:i:s");
    $adress = $_POST['adressInput'];
    $invitecode = $_POST['invitecodeInput'];
    $password = stripslashes($password);
    $hashedpw = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO employees(username, first_name, last_name, city, zip_code, email, email_verified, phone, password, adress, invite_code) VALUES ('$username', '$firstname', '$lastname', 
'$city', '$zipcode', '$email', 0, '$phone', '$password', '$adress', '$invitecode');";
    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../medewerkers.php');
        }
    } else {
        header('../');
    }
}

