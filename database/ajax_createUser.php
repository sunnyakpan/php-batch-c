<?php
include "./connection_with_db.php";

$responseMessage = '';
$error = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    if (empty($name)) {
        $responseMessage = 'Name is Required';
        $error = true;
    }

    if (empty($email)) {
        $responseMessage .= ', Email is Required';
        $error = true;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $responseMessage .= ', Invalid Email';
        $error = true;
    }


    if (empty($password)) {
        $responseMessage = 'Password is Required';
        $error = true;
    }

    if ($error == false) {
        $sql = "
        INSERT INTO users(name, email,password)
        VALUES ('$name', '$email', '$password')";

        $result = $conn->query($sql);
        if ($result) {
            $responseMessage = 'User Added Successfully';
            $sql = "SELECT id, name, email FROM users ORDER BY id DESC;";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $result = $result->fetch_all(MYSQLI_ASSOC);
               $response =  [
                "status" => 200,
                "message" => $responseMessage,
                "data" => $result
               ];
            }else{
                $response = [
                    "status"=>400,
                    "message"=> "Users not found",
                    "data"=>[]
                ];
            }
        }else{
            $response = [
                "status"=>400,
                "message"=> "User not Added",
                "data"=>[]
            ];
        }
    }else{
        $response = [
            "status"=>400,
            "message"=> $responseMessage,
            "data"=>[]
        ];
    }
}else{
    $response = [
        "status"=>400,
        "message"=> "Invalid Request Method",
        "data"=>[]
    ];
}
echo json_encode($response);
