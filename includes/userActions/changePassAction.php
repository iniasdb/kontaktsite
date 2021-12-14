<?php
session_start();
$base = "../../";

include($base."includes/database/connect.php");

if (isset($_SESSION['userId'])) {
    $id = $_SESSION['userId'];
    $previous = checkInput($_POST['previous']);
} else {
    $id = checkInput($_POST['email']);
    $previous = "ok";
}

$error = "";

if ($_POST['new1'] === $_POST['new2']) {
    $new = checkInput($_POST['new1']);
    $passError = checkPassword($new);
    if ($passError != null) {
        $error .= $passError;
    } else {
        $pass = password_hash($new, PASSWORD_DEFAULT);
    }
} else {
    $error = "Passwords don't match";
}

if (!$error) {

    $sql = "SELECT * FROM `user` WHERE `userId` = $id;";
    $qresult = $con->query($sql);

    $endresult = $qresult->fetch_assoc();

    if (password_verify($previous, $endresult['memberPassword']) || $previous === "ok") {
        $sql = "UPDATE user SET userPassword = '$pass' WHERE userId = $id";
        if ($con->query($sql)) {
            header("Location: ".$base."login");     
        } else {
            $error = "Something went wrong";
            header("Location: ".$base."profile?error=$error");        
        }
    } else {
        header("Location: ".$base."profile/?error=wrong+password");
    }

} else {
    header("Location: ".$base."profile/?error=$error");
}

function checkInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function checkPassword($pass) {
    $passError = null;
    if (!preg_match("/.{8,}/", $pass)) $passError .= "Password must contain atleast 8 characters<br>";
    if (!preg_match("/[A-Z]/", $pass)) $passError .= "Password must include at least 1 uppercase character<br>";
    if (!preg_match("/[a-z]/", $pass)) $passError .= "Password must include at least 1 lowercase character<br>";
    if (!preg_match("/[#@$?&%!?+-]/", $pass)) $passError .= "Password must include at least 1 special character<br>";
    if (!preg_match("/[0-9]/", $pass)) $passError .= "Password must contain at least 1 number";
    return $passError;
}
?>