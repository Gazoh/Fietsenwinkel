<?php
require_once("dbconnect.php");
if (isset($_POST['submit'])) {
    // Verkrijgen van de data vanuit de login form en toewijzen aan variabelen
    $firstname = $_POST['firstNameInput'];
    $lastname = $_POST['lastNameInput'];
    $adress = $_POST['adressInput'];
    $housenumber = $_POST['houseNumberInput'];
    $zipcode = $_POST['zipCodeInput'];
    $city = $_POST['cityInput'];
    $phone = $_POST['phoneInput'];
    $email = $_POST['emailInput'];
    $password = $_POST['passwordInput'];
    $date = date("Y-m-d H:i:s");
    $password = stripslashes($password);
    $hashedpw = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO customers(first_name, last_name, adress, house_number, city, zip_code, email, email_verified, password, register_date) VALUES('$firstname', '$lastname', '$adress', '$housenumber', '$city', '$zipcode' ,'$email', 0, '$hashedpw', '$date')";
    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../');
        }
    } else {
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
    }
}
?>

