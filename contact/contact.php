<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$base = "../";

include($base."includes/database/connect.php");

require($base.'includes/PHPMailer-6.5.3/src/Exception.php');
require($base.'includes/PHPMailer-6.5.3/src/PHPMailer.php');
require($base.'includes/PHPMailer-6.5.3/src/SMTP.php');


if (!isset($_POST['submit'])) {
    header("Location: ".$base."contact");
}

$errorMessage = "";

$name = $contactMail = $subject = $message = "";

if (empty($_POST['name'])) {
    $errorMessage .= "Name can't be empty<br>";
} else {
    $name = checkInput($_POST['name']);
    if (!preg_match("/^[a-zA-Z]+[a-zA-Z ]*$/", $name)) {
        $errorMessage .= "Name can only contain letters<br>";
    }
}

if (empty($_POST['mail'])) {
    $errorMessage .= "Mail can't be empty<br>";
} else {
    $contactMail = checkInput($_POST['mail']);
    if (!filter_var($contactMail, FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "Mail invalid<br>";
    }
}

if (empty($_POST['subject'])) {
    $errorMessage .= "Subject can't be empty<br>";
} else {
    $subject = checkInput($_POST['subject']);
}

if (empty($_POST['message'])) {
    $errorMessage .= "Message can't be empty<br>";
} else {
    $message = checkInput($_POST['message']);
}

if (!$errorMessage) {

    $sql = "INSERT INTO `contactmessages`(`messageSender`, `messageMail`, `message`) VALUES ('$name', '$contactMail', '$message')";
    $con->query($sql);

    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->Host = "smtp.telenet.be";

    $mail->From = "site@chirokontaktboom.be";
    $mail->FromName = "site@chirokontaktboom.be";
    $mail->isHTML(true);

    $mail->addAddress($contactMail);

    $mail->Subject = "Contact: $subject";
    $mail->Body = "<h1>Uw bericht is goed ontvangen!</h1><br>
                <p>Beste $name,</p>
                <p>Uw bericht is goed ontvangen, wij nemen zo snel mogelijk contact met u op!</p><br>
                <p>Met vriendelijke groeten,</p>
                <p>Leiding Chiro Kontakt Boom</p><br><hr><br>
                <p>Uw mail: $contactMail</p>
                <p>Uw bericht:</p>
                $message";
    $mail->AltBody = "Uw bericht is goed ontvangen, mail: $contactMail,  bericht: $message";
    
    try {
        $mail->send();
        header("Location: ".$base."contact");
    } catch (Exception $e) {
        header("Location: ".$base."contact?error=error");
    }
} else {
    header("Location: ".$base."contact?error=$errorMessage");
}

function checkInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>