<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $base.'PHPMailer-6.5.3/src/Exception.php';
require $base.'PHPMailer-6.5.3/src/PHPMailer.php';
require $base.'PHPMailer-6.5.3/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->IsSMTP();
$mail->Host = "smtp.telenet.be";

$mail->From = "site@chirokontaktboom.be";
$mail->FromName = "site@chirokontaktboom.be";
$mail->isHTML(true);

function setRecipients($recList, $mail) {
    foreach ($recList as $rec) {
        $mail->addAddress($rec);
    }
}

function sendMail($mail) {
    try {
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
