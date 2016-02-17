<?php

require_once('phpmailer/PHPMailerAutoload.php');
require_once('../includes/creds.php');

function setupMailer(){
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = $mailHost;
    $mail->SMTPAuth = true;
    $mail->Username = $mailUsername;
    $mail->Password = $mailPass;
    $mail->SMTPSecure = 'tls';
    return $mail;
}

function sendEmail($fromName, $fromEmail, $message){
    $mail = setupMailer();

    $mail->From = $fromEmail;
    $mail->FromName = $fromName;
    $mail->addAddress($mailUsername, 'Quilts 4 You');
    $mail->Subject = 'Inquiry from ' . $fromName;
    $mail->WordWrap = 150;
    $mail->Body    = $message;

    $mail->send();

}