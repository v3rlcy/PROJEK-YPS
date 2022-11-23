<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PROJEK/auth/PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'PROJEK/auth/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'PROJEK/auth/PHPMailer-master/PHPMailer-master/src/SMTP.php';

if( isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'verlacya.001@ski.sch.id';
    $mail->Password = 'axrwlfbppmhgoaqz';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('verlacya.001@ski.sch.id');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();
    
    echo 
    "
    <script>
    alert('Sent! Check your Email')
    </script>
    "

};

?>