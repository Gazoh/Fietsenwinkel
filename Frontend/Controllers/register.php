<?php
require_once("dbconnect.php");
if (isset($_POST['submit'])) {
    // Verkrijgen van de data vanuit de login form en toewijzen aan variabelen
    $password = $_POST['passwordInput'];
    $email = $_POST['emailInput'];
    $date = date("Y-m-d H:i:s");
    $password = stripslashes($password);
    $hashedpw = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO customers(email, email_verified, password, register_date) VALUES('$email', 0, '$hashedpw', '$date')";
    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../');
        }
    }
}
?>

