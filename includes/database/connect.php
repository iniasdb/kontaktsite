<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "kontakt";

$con = new mysqli($servername, $username, $password, $dbname);
$con->set_charset('utf8mb4');

if ($con->connect_error) {
    die("Connection failed, ".$con->connect_errorMessage);
}

?>