<?php
include_once "./connection_with_db.php";
$sql ="SELECT id, name, email FROM users WHERE id=4";
$result = $conn->query($sql);
if($result){
    $user = $result->fetch_assoc();
    if($user){

        var_dump($user);
    }else{
        echo "User not found";
    }
}else{
    echo "Failed: ". $conn->error;
}
?>