<?php
require_once('../classes/Email.php');

//check if mname field is empty - otherwise it's a bot & don't send

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    return sendEmail($_POST['name-field'], $_POST['email-field'], $_POST['message-field']);
} else {
    echo sendEmail($_POST['name-field'], $_POST['email-field'], $_POST['message-field']);
    header('Location: http://quilts4you.com?q=1');
}