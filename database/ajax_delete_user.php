<?php
include "./connection_with_db.php";

$uid = $_GET["id"];
$uid = (int)$uid;

$sql = "SELECT id, name, email FROM users  WHERE id=$uid;";
$user = null;
$message = '';
$result = $conn->query($sql);
$referrer = $_SERVER['HTTP_REFERER'];
if ($result->num_rows >0) {
    $user = $result->fetch_assoc();
    $sql = "DELETE FROM users  WHERE id=$uid;";
    $result = $conn->query($sql);
    if ($result){
        $message = $user['name']." is deleted successfully";
    }else{
        $message ="Sorry Could not delete user";
    }
}else{
    // get referrer url
    $message ="User not found";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
   include_once "./form_css/style.php"
   ?>
</head>
<body>

<div class="ajax_page_wrapper">
    <div class="mgs_box">
        <?php  echo $message; ?>
    </div>
    <a href="<?php echo $referrer ?>" class="tb_btn"> Go Back </a>
</div>
    
</body>
</html>
