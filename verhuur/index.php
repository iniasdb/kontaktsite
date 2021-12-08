<?php
$section = "verhuur";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>

    
    <main class="verhuur">
        <h1><?=$section?></h1>
        <?php $pagina = "verhuur"; include($base."includes/database/getTeksten.php");?>
        <div class="container">
            <?php include($base."includes/database/getVerhuur.php");?>
        </div>
        <p>Indien u iets wilt huren kan u een mailtje sturen naar <?=getVerhuur();?></p>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>