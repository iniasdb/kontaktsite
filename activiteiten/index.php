<?php
session_start();
$section = "activiteiten";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
    <link rel="stylesheet" href="<?=$base?>js/fullcalendar/main.css">
    <script src="<?=$base?>js/fullcalendar/main.js"></script>
    <script src='<?=$base?>js/fullcalendar/locales/nl.js'></script>
    <script src="<?=$base?>js/calendar.js"></script>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="activiteiten">
        <h1><?=$section?></h1>
        <div id="btns">
            <a href="./#calendar"><button>Bekijk onze kalender</button></a>
            <a href="https://calendar.google.com/calendar/u/0/r?cid=MXJscmtsNGFnYmplczdudjVrMjU5dHJjMHNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" target="_blank"><button>Abonneer op onze kalender</button></a>
        </div>
        <h2>Activiteiten dit chirojaar:</h2>
        <ul>
            <?php include($base."includes/database/getActiviteiten.php");?>
        </ul>
    </main>
    <hr>
    <div id="calendar" style="max-width: 90%"></div>


    <?php include($base."includes/footer.php")?>

</body>
</html>