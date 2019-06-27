<?php
require_once("dbconnect.php");
if (isset($_POST['submit'])) {

    $code = $_POST['codeInput'];
    $creationDate = $_POST['creationdateInput'];
    $expiryDate = $_POST['expirydateInput'];
    $amount = $_POST['amountInput'];
    $valid = $_POST['validInput'];

    // Set valid or invalid coupon code
    if($_POST['validInput'] == 0) {
        $valid = 0;
    } else if($_POST['validInput'] == 1) {
        $valid = 1;
    }

    $sql = "INSERT INTO discount_codes(code, amount, is_valid, creation_date, expiry_date) VALUES ('$code', '$amount', '$valid', '$creationDate', '$expiryDate');";
    if ($con->query($sql) === TRUE) {
        {
            header('Location: ../index.php');
        }
    }
}