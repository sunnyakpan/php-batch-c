<?php
include "../database/connection_with_db.php";

$responseMessage = '';
$error = false;
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];


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

    if( $error == false) {
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if($password != $user['password']){
                $responseMessage = 'Invalid Password';
                $error = true;
                $response = [
                    "status"=>400,
                    "message"=> $responseMessage,
                    "data"=>[$password,md5($user['password'])]
                ];
            }else{
                $responseMessage = 'You\'ve login Successfully';
                $_SESSION['user'] = $user;
                $response =  [
                    "status" => 200,
                    "message" => $responseMessage,
                    "nextPage" => 'http://localhost/tutorials/niit/ikorodu/batch-c/authentication/dashboard.php',
                ];

            }
        }else{
            $response = [
                "status"=>400,
                "message"=> "User not found",
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
        "message"=> "Invalid Request",
        "data"=>[]
    ];
}
echo json_encode($response);
?>