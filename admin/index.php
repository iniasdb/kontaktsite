<?php
session_start();

$section = "admin";
$base = "../";

if (!isset($_SESSION['role']) || $_SESSION['role'] == 1) {
    header("Location: ".$base."profile");
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
    <script src="<?=$base?>js/leidingpicture.js"></script>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="profile">
        <h1><?=$section?></h1>
        <?php echo "<h2>Welkom terug ". $_SESSION['fname']."</h2>" ?>
        <a href="./nieuws/"><button>Nieuwsbericht toevoegen</button></a>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>