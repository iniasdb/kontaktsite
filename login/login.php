<?php

session_start();

$base = "../";

include($base."includes/database/connect.php");

if (!isset($_POST['submit'])) {
    header("Location: ../login");
}

$_SESSION['loginPostdata'] = $_POST;

$errorMessage = $mail = $pass = "";

if (empty($_POST['mail'])) {
    $errorMessage .= "Mail mag niet leeg zijn<br>";
} else {
    $mail = checkInput($_POST['mail']);
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "Mail incorrect<br>";
    }
}

if (empty($_POST['pass'])) {
    $errorMessage .= "Wachtwoord mag niet leeg zijn<br>";
} else {
    $pass = checkInput($_POST['pass']);
}

if (empty($_POST['captcha'])) {
    $errorMessage .+ "Captcha mag niet leeg zijn<br>";
} else {
    $captcha = $_POST['captcha'];
    if ($captcha != $_SESSION['digit']) {
        $errorMessage .= "Captcha incorrect";
    }
}

if (!$errorMessage) {

    $sql = "SELECT * FROM `user` WHERE `userMail` = '$mail'";
    $qresult = $con->query($sql);

    if ($qresult->num_rows > 0) {
        while ($endresult = $qresult->fetch_assoc()) {
            $dbpass = $endresult['userPassword'];
            if (password_verify($pass, $dbpass)) {
                $_SESSION['fname'] = $endresult['userFirstname'];
                $_SESSION['userId'] = $endresult['userId'];
                $_SESSION['role'] = $endresult['role'];
                header("Location: ../admin");        
            } else {
                header("Location: ../login/index.php?error=wrong+password");
            }
        }
    } else {
        header("Location: ../login/index.php?error=wrong+email");
    }
} else {
    header("Location: ../login/index.php?error=$errorMessage");
}


function checkInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>