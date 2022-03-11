<?php
$base = "../../";
include($base."includes/database/connect.php");

$id = $_POST['id'];
$title = $_POST['title'];
$message = $_POST['message'];

$sql = "UPDATE nieuws SET nieuwsTitel='$title',nieuwsBericht='$message' WHERE nieuwsId = $id";

$qresult = $con->query($sql);

if ($con->query($sql)) {
    header("Location: $base/nieuws/");
} else {
    header("Location: $base/admin/nieuws?error=error");
}


?>