<?php
$section = "meisjesleiding";
$base = "../../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
    <script src="<?=$base?>js/leidingpicture.js"></script>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="leidingInfo">
        <h1><?=$section?></h1>
        <?php $jongens = 0; include($base."includes/database/getLeiding.php");?>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>