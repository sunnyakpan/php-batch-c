<?php
include_once "./connection_with_db.php";
$sql ="UPDATE users SET name='Justina Mike', email='justinamike@gmail.com' WHERE id=3";
$result = $conn->query($sql);
if($result){
    echo "Record Updated successfully";
}else{
    echo "Failed: ". $conn->error;
}
?>