<?php
session_start();
ob_start();

if (isset($_SESSION['role'])) {
    header("Location: ../profile");
}

if (!isset($_GET['id'])) {
    header("Location: ../");
}

$base = "../";

include($base."includes/database/connect.php");

$id = checkInput($_GET['id']);
$sql = "SELECT `userId` FROM `user` WHERE `userRegCode` = '$id'";
$qresult = $con->query($sql);

if ($qresult->num_rows > 0) {
    $sql = "UPDATE `user` SET `verified`=1 WHERE `userRegCode`='$id'";
    $con->query($sql);
    header("Location: ../login/");
} else {
    header("Location: ../?error=foute_id");
}

function checkInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

?>