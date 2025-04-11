<?php

use PHPMailer\PHPmailer\PHPMailer;

require_once "../PHPMailer/PHPMailer.php";
require_once "../PHPMailer/SMTP.php";
require_once "../PHPMailer/Exception.php";

class SendEmail
{

 
    public function send($toEmail, $subject, $message)
    {
      
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'xxxxxx';
        $mail->Password = 'xxxxxx';


        $mail->isHTML(true);
        $mail->setFrom("suppor@niitfastbite.com", "Niit Fastbite");
        $mail->addAddress($toEmail);
        $mail->Subject = $subject;
        $mail->Body = $message;
        if ($mail->send()) {
            $response = ["status"=>"success","message"=>"Email Has Been Sent"] ;
        } else {
            $response = ["status"=>"error","message"=>"Sorry An Error Occured"] ;
           
        }
        return $response;
    }
}
