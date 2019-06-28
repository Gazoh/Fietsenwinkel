<?php
require_once('dbconnect.php');
if (isset($_POST['submit'])) {

    $email = $_POST['emailInput'];

    $sql = "INSERT INTO newsletter_receivers (email)VALUES ('$email')";

    if ($con->query($sql) === TRUE) {
        header('Location: ../index.php');
    }
}