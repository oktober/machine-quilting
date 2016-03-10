<?php
require_once('../classes/Email.php');

echo sendEmail($_POST['name-field'], $_POST['email-field'], $_POST['message-field']);
header('Location: http://quilts4you.com?q=1');