<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 20/05/2019
 * Time: 22:49
 */
require_once("dbconnect.php");

if (isset($_POST['submit'])) {
    // Verkrijgen van de data vanuit de login form en toewijzen aan variabelen
    $inviteCode = $_POST['inviteCode'];
    $firstname = $_POST['firstNameInput'];
    $lastname = $_POST['lastNameInput'];
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];
    $repassword = $_POST['repasswordInput'];
    $phone = $_POST['phoneInput'];
    $email = $_POST['emailInput'];
    $date = date("Y-m-d H:i:s");

    $checkInvite = "SELECT * FROM employees WHERE invite_code = '$inviteCode'";
    $resultInvite = $con->query($checkInvite);
    if ($resultInvite->num_rows > 0) {
        if ($password == $repassword) {
            $password = stripslashes($password);
            $hashedpw = password_hash($password, PASSWORD_DEFAULT);
            $sql = "UPDATE employees SET username = '$username', first_name = '$firstname', last_name = '$lastname', phone = '$phone' , password = '$hashedpw', register_date = '$date', invite_code = 
'', email = '$email' WHERE invite_code = '$inviteCode'";
            if ($con->query($sql) === TRUE) {
                {
                    header('Location: ../login.php');
                }
            }
        }
    }
}
?>

