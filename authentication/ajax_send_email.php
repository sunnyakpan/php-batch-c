<?php
include "../database/connection_with_db.php";
include "./SendEmail.php";

$responseMessage = '';
$error = false;
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    if (empty($email)) {
        $responseMessage .= ', Email is Required';
        $error = true;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $responseMessage .= ', Invalid Email';
        $error = true;
    }


    if (empty($subject)) {
        $responseMessage = 'Subject is Required';
        $error = true;
    }

    if (empty($message)) {
        $responseMessage = 'Message is Required';
        $error = true;
    }


    if( $error == false) {
        $sendEmail = new SendEmail();
        $response = $sendEmail->send($email, $subject, $message);
        if($response['status'] == 'success'){
            $responseMessage = 'You\'ve Successfully Sent an Email';
    
            $response =  [
                "status" => 200,
                "message" => $responseMessage,
                "nextPage" => '',
                "data"=>$response,
            ];
        }else{
            $responseMessage = 'Sorry An Error Occured';
            $error = true;
            $response = [
                "status"=>400,
                "message"=> $responseMessage,
                "data"=>[],
                'nextPage'=>''
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