<?php

$base = "../../";

include($base."includes/database/connect.php");

$title = $_POST['title'];
$message = $_POST['editor1'];
$timestamp = date("Y/m/d H:i:s");

$sql = "INSERT INTO `nieuws` (`nieuwsTitel`, `nieuwsBericht`, `datePosted`) VALUES ('$title', '$message', '$timestamp');";

if ($con->query($sql)) {
    header("Location: $base/nieuws/");
} else {
    header("Location: $base/admin/nieuws?error=error");
}

function checkInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}


?>