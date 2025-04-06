<?php
include "./connection_with_db.php";

$responseMessage = '';
$error = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];


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


    if ($error == false) {
        $sql = "UPDATE users SET name='".$name."', email='".$email."' WHERE id=".$uid.";";

        $result = $conn->query($sql);
        if ($result) {
            $responseMessage = 'User Updated Successfully';
            $response =  [
                "status" => 200,
                "message" => $responseMessage,
                "data" => $result
               ];
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
