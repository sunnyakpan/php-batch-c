<?php
session_start();

// check if login
if (!isset($_SESSION['user'])) {
    header("Location: http://localhost/tutorials/niit/ikorodu/batch-c/authentication/login.php");
    exit();
}

?>