<?php
$section = "leiding";
$base = "../";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($base."includes/head.php");?>
    <script src="<?=$base?>js/leidingpicture.js"></script>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="leiding">
        <h1>ONZE LEIDING</h1>
        <div class="choice">
            <a href="./jongens" class="jongens" id="jongens" onmouseover="show('jongens', 'meisjes')" onmouseout="hide('jongens', 'meisjes')">
                    <h1>jongens</h1>
            </a>
            <a href="./meisjes" class="meisjes" id="meisjes" onmouseover="show('meisjes', 'jongens')" onmouseout="hide('meisjes', 'jongens')">
                    <h1>meisjes</h1>
            </a>
        </div>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>