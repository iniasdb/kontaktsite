<?php
session_start();
$section = "contact";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>

    <main class="contact">
        <h1><?=$section?></h1>
        <h2>U kan ons contacteren op volgende mailadressen</h2>
        <div class="mail">
            <div id="m">
                <h2>Meisjes</h2>
                <?php getMeisjes();?>
            </div>
            <div id="j">
                <h2>Jongens</h2>
                <?php getJongens();?>
            </div>
            <div id="g">
                <h2>Gemengd</h2>
                <?php getGemengd();?>
            </div>
        </div>
        <h2>Of via onderstaande form</h2>
        <form action="./contact.php" method="POST">
            <label for="name">Uw naam <span>*</span></label><br>
            <input type="text" name="name" id="name" required><br>
            <label for="mail">Uw e-mailadres <span>*</span></label><br>
            <input type="email" name="mail" id="mail" required><br>
            <label for="subject">Onderwerp <span>*</span></label><br>
            <input type="text" name="subject" id="subject" required><br>
            <label for="message">Bericht <span>*</span></label><br>
            <textarea name="message" id="message" cols="30" rows="10" resizable="false" required></textarea><br>
            <input name="submit" type="submit" id="submit" value="verzenden">
        </form>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>