<?php
session_start();

$section = "UNDER CONSTRUCTION";
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
        <div class="container">
            <!-- <form action="verhuur.php">
                <?php
                // $count = 0;
                // foreach ($_GET as $item) {
                //     echo "<input type='number' name='amount$item' id='item$count'><label for='item$count>item$count</label>";
                // }
                
                ?>
            </form> -->
        </div>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>