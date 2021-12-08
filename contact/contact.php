<?php

if (!isset($_POST['submit'])) {
    header("Location: ../contact");
}

$errorMessage = "";

$name = $mail = $subject = $message = "";

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
    $mail = checkInput($_POST['mail']);
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
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

echo "$name <br> $mail <br> $subject <br> $message";
echo "<br> $errorMessage";

function checkInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>