<?php
require_once('phpmailer/PHPMailerAutoload.php');

function setupMailer(){
    require('creds.php');

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
    require('creds.php');

    try {
        $mail = setupMailer();
        $mail->From = $fromEmail;
        $mail->FromName = $fromName;
        $mail->addAddress($mailUsername, 'Quilts 4 You');
        $mail->Subject = 'Inquiry from ' . $fromName;
        $mail->WordWrap = 150;
        $mail->Body    = $message;
        $mail->send();
        return 'Your message was sent successfully. Now redirecting you back to the home page...';
    } catch (phpmailerException $e) {
        return $e->errorMessage();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}