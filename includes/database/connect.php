<?php

require($base."includes/getEnv.php");

$servername = getenv("DB_HOST");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASS");
$dbname = getenv("DB_NAME");

$con = new mysqli($servername, $username, $password, $dbname);
$con->set_charset('utf8mb4');

if ($con->connect_error) {
    die("Connection failed, ".$con->connect_errorMessage);
}

?>