<?php

include "./connection_with_db.php";

$sql = "SELECT id, name, email FROM users ORDER BY id DESC;";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $result = $result->fetch_all(MYSQLI_ASSOC);
    // loop through the users and update the password
    
    foreach ($result as  $user) {
        $id = $user['id'];
        $password = 12345;
        // $hash = password_hash($password, PASSWORD_DEFAULT);
        $hash = md5($password);
        $sql = "UPDATE users SET password='$hash' WHERE id=$id;";
        $result = $conn->query($sql);
    }
   $response =  [
    "status" => 200,
    "message" => "Users found",
    "data" => $result
   ];
}else{
    $response = [
        "status"=>400,
        "message"=> "Users not found"
    ];
}
echo json_encode($response);

?>