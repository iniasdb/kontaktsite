<?php

session_start();

$base = "../";

include($base."includes/database/connect.php");

if (!isset($_POST['submit'])) {
    header("Location: ../login");
}

$errorMessage = $mail = $pass = "";

if (empty($_POST['mail'])) {
    $errorMessage .= "Mail can't be empty<br>";
} else {
    $mail = checkInput($_POST['mail']);
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errorMessage .= "Mail invalid<br>";
    }
}

if (empty($_POST['pass'])) {
    $errorMessage .= "Password can't be empty<br>";
} else {
    $pass = checkInput($_POST['pass']);
}

if (!$errorMessage) {

    $sql = "SELECT * FROM `user` WHERE `userMail` = '$mail'";
    $qresult = $con->query($sql);

    if ($qresult->num_rows > 0) {
        while ($endresult = $qresult->fetch_assoc()) {
            $dbpass = $endresult['userPassword'];
            if (password_verify($pass, $dbpass)) {
                $_SESSION['fname'] = $endresult['userFirstname'];
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