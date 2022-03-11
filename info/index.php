<?php
session_start();
$section = "info";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="info">
        <h1><?=$section?></h1>
        <?php $pagina = "info"; include($base."includes/database/getTeksten.php")?>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2505.4472858412482!2d4.367235515525463!3d51.10020714821447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f1e1ac6b866f%3A0x8aa596796d2735cf!2sSpoorweglaan%2024%2C%202850%20Boom!5e0!3m2!1snl!2sbe!4v1642367769034!5m2!1snl!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <?php include($base."includes/database/getInfoSubpages.php");?>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>