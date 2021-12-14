<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$base = "../../";

include($base."includes/database/connect.php");
require($base.'includes/PHPMailer-6.5.3/src/Exception.php');
require($base.'includes/PHPMailer-6.5.3/src/PHPMailer.php');
require($base.'includes/PHPMailer-6.5.3/src/SMTP.php');


if (!isset($_POST['submit'])) {
    header("Location: ".$base."forgot?error=error");
}

$email = checkInput($_POST['emailReset']);

$sql = "SELECT userId, userRegCode FROM user WHERE userMail = '$email'";
$qresult = $con->query($sql);

if ($qresult->num_rows>0) {
    
    $endresult = $qresult->fetch_assoc();
    $user = $endresult['userId'];
    $id = $endresult['userRegCode'];

    $mailTo = $mailSubject = $mailBody = "";

    // TODO: commented during development
    //$mailTo = $email;
    $mailTo = "inias.debelder@hotmail.be";

    sendMail($mailTo, $id, $user);
    header("Location: ".$base."login/");
} else {
    header("Location: ".$base."forgot?error=verkeerde email");
}

function checkInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function sendMail($contactMail, $id, $user) {
    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->Host = "smtp.telenet.be";

    $mail->From = "site@chirokontaktboom.be";
    $mail->FromName = "site@chirokontaktboom.be";
    $mail->isHTML(true);

    // commented during development
    // $mail->addAddress($contactMail);
    $mail->addAddress("inias.debelder@hotmail.be");

    $mail->Subject = "Uw wachtwoord herstellen";
    $mail->Body = "<center><h1>Reset uw email!</h1><br>
                <p>Beste,</p>
                <p>Reset uw wachtwoord door op onderstaande knop te drukken!</p><br>
                <a href='http://localhost/kontakt/reset/?id=$id&user=$user'
                style='width: 100px; background-color: red; color: white; text-decoration: none; border-radius: 10px; padding: 10px'>Reset
                your password</a><br>
                <p>Of door naar volgende link te surfen:</p><br>
                <p>http://localhost/kontakt/reset/index.php?id=$id&user=$user</p><br>
                <p>Met vriendelijke groeten,</p>
                <p>Leiding Chiro Kontakt Boom</p><br><hr><br></center>";
    $mail->AltBody = "Uw bericht is goed ontvangen";
    
    try {
        $mail->send();
        return 0;
    } catch (Exception $e) {
        return 1;
    }
}
?>