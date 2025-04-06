<?php
include_once "./connection.php";

// Create database
$sql = "CREATE DATABASE niit__batch__cdb";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>