<?php

include_once "./connection_with_db.php";

$sql = "CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
email VARCHAR(150) NOT NULL,
password VARCHAR(150) NOT NULL
);";
if($conn->query($sql)){
    echo "Table created successfully";
}else{
    echo "Error creating table: " . $conn->error;
}


?>