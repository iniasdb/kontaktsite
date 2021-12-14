<?php
session_start();
$section = "afdelingen";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
    <script src="<?=$base?>js/leidingpicture.js"></script>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="afdelingen">
        <h1><?=$section?></h1>
        <?php include($base."includes/database/getAfdelingen.php");?>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>