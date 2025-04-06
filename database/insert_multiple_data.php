<?php
include_once "./connection_with_db.php";

// $name = "Samuel";
// $email = "samuel@gmail.com";
// $password ="12345";

$name = "Miracle John";
$email = "Miraclejohn@gmail.com";
$password ="12345";

$sql = "
INSERT INTO users(name, email,password)
VALUES ('$name', '$email', '$password')
";
if($conn->query($sql)){
    $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
}else{
    echo "Error inserting data ". $conn->error;
}
?>