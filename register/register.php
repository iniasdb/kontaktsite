<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$base = "../";

include($base."includes/database/connect.php");
require($base.'includes/PHPMailer-6.5.3/src/Exception.php');
require($base.'includes/PHPMailer-6.5.3/src/PHPMailer.php');
require($base.'includes/PHPMailer-6.5.3/src/SMTP.php');


if (!isset($_POST['submit'])) {
    header("Location: ./");
}

$_SESSION['regPostdata'] = $_POST;

$errorMessage = $fname = $lname = $mail = $pass = $pass2 = "";

if (empty($_POST['fname'])) {
    $errorMessage .= "Voornaam mag niet leeg zijn<br>";
} else {
    $fname = checkInput($_POST['fname']);
    if (!preg_match("/^[a-zA-Z]+[a-zA-Z ]*$/", $fname)) {
        $errorMessage .= "Voornaam mag alleen uit letters bestaan<br>";
    }
}

if (empty($_POST['lname'])) {
    $errorMessage .= "Achternaam mag niet leeg zijn<br>";    
} else {
    $lname = checkInput($_POST['lname']);
    if (!preg_match("/^[a-zA-Z]+[a-zA-Z ]*$/", $lname)) {
        $errorMessage .= "Achternaam mag alleen uit letters bestaan<br>";
    }
}

if (empty($_POST['mail'])) {
    $errorMessage .= "Mail mag niet leeg zijn<br>";
} else {
    $contactMail = checkInput($_POST['mail']);
    if (!filter_var($contactMail, FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "Mail invalid<br>";
    }
}

if (empty($_POST['pass'])) {
    $errorMessage .= "Wachtwoord mag niet leeg zijn<br>";
} else {
    $pass = checkInput($_POST['pass']);
    $passError = checkPassword($pass);
    if ($passError != null) {
        $errorMessage .= $passError."<br>";
    }
}

if (empty($_POST['passConfirm'])) {
    $errorMessage .= "Wachtwoord mag niet leeg zijn<br>";
} else {
    $pass2 = checkInput($_POST['passConfirm']);
}

if ($pass !== $pass2) {
    $errorMessage .= "Wachtwoorden zijn niet gelijk<br>";
}

if (empty($_POST['captcha'])) {
    $errorMessage .+ "Captcha mag niet leeg zijn<br>";
} else {
    $captcha = $_POST['captcha'];
    if ($captcha != $_SESSION['digit']) {
        $errorMessage .= "Captcha incorrect<br>";
    }
}

$sql = "SELECT * FROM user WHERE userMail = '$contactMail'";
$qresult = $con->query($sql);

if ($qresult->num_rows > 0) {
    $errorMessage .= "Email al geregistreerd<br>";
}


if (!$errorMessage) {

    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $id = generateId();

    $sql = "INSERT INTO `user`(`userMail`, `userFirstname`, `userLastname`, `userPassword`, `userRegCode`) VALUES ('$contactMail','$fname','$lname','$pass', '$id')";
    $qresult = $con->query($sql);

    if ($qresult->num_rows > 0) {
        echo "done";
        sendMail($contactMail, $lname." ".$fname, $id);
        header("Location: ../login/");
    } else {
        header("Location: ../register/");
    }
} else {
    header("Location: ../register/index.php?error=$errorMessage");
}

function sendMail($contactMail, $name, $code) {
    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->Host = "smtp.telenet.be";

    $mail->From = "site@chirokontaktboom.be";
    $mail->FromName = "site@chirokontaktboom.be";
    $mail->isHTML(true);

    // commented during development
    // $mail->addAddress($contactMail);
    $mail->addAddress("inias.debelder@hotmail.be");

    $mail->Subject = "Uw account verifiëren";
    $mail->Body = "<h1>Verifieer uw email!</h1><br>
                <p>Beste $name,</p>
                <p>Verifieer uw email door op onderstaande knop te drukken!</p><br>
                <a href='http://localhost/kontakt/verify/index.php?id=$code'
                style='width: 100px; background-color: red; color: white; text-decoration: none; border-radius: 10px; padding: 10px'>Verify
                your
                account</a>
                <p>Of door naar volgende link te surfen:</p>
                <p>http://localhost/kontakt/verify/index.php?id=$code</p>
                <p>Met vriendelijke groeten,</p>
                <p>Leiding Chiro Kontakt Boom</p><br><hr><br>";
    $mail->AltBody = "Uw bericht is goed ontvangen";
    
    try {
        $mail->send();
        return 0;
    } catch (Exception $e) {
        return 1;
    }
}

function checkInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
}

function generateId() {
    return (md5(microtime() . mt_rand(10000, 99999)));
}

function checkPassword($pass) {
    $passError = null;
    if (!preg_match("/.{8,}/", $pass)) $passError .= "Wachtwoord moet uit minstens 8 karakters bestaan<br>";
    if (!preg_match("/[A-Z]/", $pass)) $passError .= "Wachtwoord moet minstens 1 hoodfletter bevatten<br>";
    if (!preg_match("/[a-z]/", $pass)) $passError .= "Wachtwoord moet minstens 1 kleine letter bevatten<br>";
    if (!preg_match("/[#@$?&%!?+-]/", $pass)) $passError .= "Wachtwoord moet minstens 1 speciaal karakter bevatten <br>";
    if (!preg_match("/[0-9]/", $pass)) $passError .= "Wachtwoord moet minstens 1 nummer bevatten<br>";
    return $passError;
}

?>