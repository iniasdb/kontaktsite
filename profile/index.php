<?php
session_start();

$section = "profile";
$base = "../";

if (!isset($_SESSION['role'])) {
    header("Location: $base");
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
        <?php echo "<h2>Welkom terug ". $_SESSION['fname']."</h2>"?>
        <a href="<?=$base?>logout.php"><button>Uitloggen</button></a>
        <button>Account aanpassen</button>
        <button>Kind/lid toevoegen</button>
        <button>Kinderen/leden bekijken</button>
        <button>Inschrijven</button>
        <button>Inschrijven kamp</button>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>