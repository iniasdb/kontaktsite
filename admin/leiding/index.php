<?php
session_start();

$section = "leiding bewerken";
$base = "../";

if (!isset($_SESSION['role']) || $_SESSION['role'] == 1) {
    header("Location: ".$base."profile");
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="edit">
        <h1><?=$section?></h1>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>