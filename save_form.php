<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ways of getting form data
    // use of $_POST for post method
    // use of $_GET for get method
    $_SESSION["response"] = [
        "status" => '',
        "message" => '',
        "data" => [
            "name" => '',
            "email" => '',
            "phone" => '',
            "image" => '',
        ]
    ];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $file_name = '';


    if (empty($name)) {
        $_SESSION["response"]['status'] = 'error';
        $_SESSION["response"]['message'] .= ' Name is Required';
    }

    if (empty($email)) {
        $_SESSION["response"]['status'] = 'error';
        $_SESSION["response"]['message'] .= ', Email is Required';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["response"]['status'] = 'error';
        $_SESSION["response"]['message'] .= ', Invalid Email';
    }

    if (empty($phone_number)) {
        $_SESSION["response"]['status'] = 'error';
        $_SESSION["response"]['message'] .= ', Phone Number is Required';
    }
    // validate profile image
    if(isset($_FILES["profile_image"]) && $_FILES["profile_image"]["size"] >0){
        $file_name = $_FILES["profile_image"]["name"];
        $file_size = $_FILES["profile_image"]["size"];
        $location = "images/".$file_name;

        $allowedEx = ["jpeg", "jpg", "png", "svg", "gif"];

        $fileExtension = pathinfo($file_name, PATHINFO_EXTENSION);
        $fileExtension = strtolower($fileExtension);
        if(!in_array($fileExtension, $allowedEx)){
            $_SESSION["response"]['status'] = 'error';
            $_SESSION["response"]['message'] .= ', Invalid Profile Image';
        }

        $max_size = 5 * 1024 * 1024;
        if($file_size > $max_size){
            $_SESSION["response"]['status'] = 'error';
            $_SESSION["response"]['message'] .= ', Profile Image is too Large, maximum of 5mb allowed';
        }

        if(file_exists($location)){
            // $errors[]= "File Already Exists";

            $file_name = time().$file_name;
            $location = "images/".$file_name;
        }


        move_uploaded_file($_FILES["profile_image"]["tmp_name"], $location);
        $file_name = $location;
        
    }else{
        $file_name = null;
    }

    if ($_SESSION["response"]['status'] != 'error') {
        $_SESSION["response"]['status'] = 'success';
        $_SESSION["response"]['message'] = "Thank You, You've  Sumitted Successfully ";
        $_SESSION["response"]['data'] = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone_number,
            "image" => $file_name
        ];
    }else{
        $_SESSION["response"]['data'] = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone_number,
            "image" => $file_name
        ];
    }

    header("Location: form.php");
}
