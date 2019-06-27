<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 27/06/2019
 * Time: 11:37
 */
require_once("dbconnect.php");
session_start();
session_destroy();
header("Location: ../index.php");
debug_to_console("Session destroyed, logout success");
exit();