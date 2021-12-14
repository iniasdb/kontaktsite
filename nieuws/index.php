<?php
session_start();

$section = "nieuws";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="nieuws">
        <h1><?=$section?></h1>
        <?php include($base."includes/database/getNieuws.php");?>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>