<?php
session_start();
session_destroy();
header("Location: http://localhost/tutorials/niit/ikorodu/batch-c/authentication/login.php");
?>