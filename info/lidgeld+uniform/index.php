<?php
session_start();
$section = "lidgeld en uniform";
$base = "../../";
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
        <div class="infoContainer">
            <div>
            <?php $pagina = "lidgeld"; include($base."includes/database/getTeksten.php")?>
            </div>
            <div>
            <?php $pagina = "ocmw"; include($base."includes/database/getTeksten.php")?>
            </div>
            <div>
            <?php $pagina = "uniform"; include($base."includes/database/getTeksten.php")?>
            </div>
            <?php include($base."includes/database/getInfoSubpages.php");?>
        </div>    
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>