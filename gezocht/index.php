<?php
session_start();
$section = "gezocht";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="gezocht">
        <h1><?=$section?></h1>
        <?php $pagina = "gezocht"; include($base."includes/database/getTeksten.php")?>
        <ul>
            <?php include($base."includes/database/getGezocht.php");?>
        </ul>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>