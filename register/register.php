<?php
session_start();

$base = "../";

include($base."includes/database/connect.php");

if (!isset($_POST['submit'])) {
    header("Location: ./");
}

$errorMessage = $fname = $lname = $mail = $pass = $pass2 = "";

if (empty($_POST['fname'])) {
    $errorMessage .= "First name can't be empty<br>";
} else {
    $fname = checkInput($_POST['fname']);
    if (!preg_match("/^[a-zA-Z]+[a-zA-Z ]*$/", $fname)) {
        $errorMessage .= "First name can only contain letters<br>";
    }
}

if (empty($_POST['lname'])) {
    $errorMessage .= "Last name can't be empty<br>";    
} else {
    $lname = checkInput($_POST['lname']);
    if (!preg_match("/^[a-zA-Z]+[a-zA-Z ]*$/", $lname)) {
        $errorMessage .= "Last name can only contain letters<br>";
    }
}

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

if (empty($_POST['passConfirm'])) {
    $errorMessage .= "Password can't be empty<br>";
} else {
    $pass2 = checkInput($_POST['passConfirm']);
}

if ($pass !== $pass2) {
    $errorMessage .= "Password are not identical<br>";
}

if (!$errorMessage) {

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `user`(`userMail`, `userFirstname`, `userLastname`, `userPassword`) VALUES ('$mail','$fname','$lname','$pass')";

    if ($con->query($sql)) {
        echo "done";
        header("Location: ../login/");
    } else {
        header("Location: ../register/");
    }
} else {
    header("Location: ../register/index.php?error=$errorMessage");
}

function checkInput($input) {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
}

?>