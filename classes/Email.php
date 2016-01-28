<?php

require_once('phpmailer/PHPMailerAutoload.php');

function setupMailer(){
    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '';                 // SMTP username
    $mail->Password = '';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->From = '';
    $mail->FromName = '';
    return $mail;
}

function notifyAdmins($fullName, $waysToHelp, &$pdo_db_object){

    $message = $fullName . ' has signed up to volunteer for GDI SLC. They are interested in helping out in the following ways:<br />';
    $plainTextMessage = $fullName . ' has signed up to volunteer for GDI SLC. They are interested in helping out in the following ways: ';
    //$waysChosen = [];
    $waysChosen = array();

    foreach($waysToHelp as $waysToHelpId => $value){

        $query = $pdo_db_object->prepare("SELECT description FROM `ways_to_help` WHERE `id`= ?");
        $query->bindValue(1, $waysToHelpId);

        try{

            $query->execute();
            $data = $query->fetch();

            $waysChosen[] = $data['description'];

        } catch(PDOException $e){

            die($e->getMessage());
        }
    }

    $message .= implode($waysChosen,'<br />');
    $plainTextMessage .= implode($waysChosen,', ');
    $message .= '<br /><br />Please visit <a href="http://girldevelopitslc.com/sloth">http://girldevelopitslc.com/sloth</a> to view their information.';
    $plainTextMessage .= '. Please visit http://girldevelopitslc.com/sloth to view their information.';

    $mail = setupMailer();

    //$mail->addAddress('emailaddress', 'Stacie Farmer');

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'New potential volunteer for GDI SLC';
    $mail->Body    = $message;                            //HTML text
    $mail->AltBody = $plainTextMessage;                  //plain text for non-HTML mail clients
    $mail->send();

}