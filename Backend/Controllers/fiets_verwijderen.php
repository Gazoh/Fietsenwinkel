<?php
require_once("dbconnect.php");
$requested_query_vars = $_SERVER["QUERY_STRING"];
$id = str_replace("id=", "", $requested_query_vars);
echo $id;
$sql = "DELETE FROM bikes WHERE ID = '$id'";
if($con->query($sql))
{
    header('Location: ../fietsen.php');
} else {
    header('../');
}