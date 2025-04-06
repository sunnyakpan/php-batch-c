<?php
include_once "./connection_with_db.php";
$sql ="DELETE FROM users WHERE id=4";
$result = $conn->query($sql);
if($result){
    echo "Record deleted successfully";
}else{
    echo "Failed: ". $conn->error;
}
?>