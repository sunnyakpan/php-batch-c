<?php
include_once "./checkAuth.php";
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php
    include_once "../database/form_css/dashboard.php"
    ?>
</head>
<body>
    <header class="header">
        <div class="brand">
            <a href="/">
                <b>PHP BATCHC</b>
            </a>
        </div>
        <nav class="navbar">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="http://localhost/tutorials/niit/ikorodu/batch-c/authentication/logout.php">Logout</a></li>
            </ul>
    </header>
    <div class="page_content">
        <div class="page_content_wrapper">
            <h1>Dashboard</h1>
            <p>Welcome to the dashboard, <b> <?php echo $user['name']; ?>!</p> </b>
            <p>Your email is: <b> <?php echo $user['email']; ?></p></b>
        </div>
    </div>
    
</body>
</html>