<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-6.5.3/src/Exception.php';
require './PHPMailer-6.5.3/src/PHPMailer.php';
require './PHPMailer-6.5.3/src/SMTP.php';

//Load Composer's autoloader

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    ini_set("SMTP","smtp.telenet.be");
    ini_set("smtp_port","587");
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->IsSMTP();
    $mail->SetFrom("jjansens339@gmail.com","jan");
    $mail->FromName = "From"; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->addAddress('inias.debelder@hotmail.be', 'inias');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
