<?php
$section = "home";
$base = "./";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=strtoupper($section)?> | Chiro Kontakt Boom</title>
    <link rel="stylesheet" href="<?=$base?>css/reset.css">
    <link rel="stylesheet" href="<?=$base?>css/style.css">
    <script src="https://kit.fontawesome.com/db218fc83d.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <div class="overlay"></div>
        <?php include($base."includes/nav.php");?>
        <div class="logo">
            <img src="<?=$base?>images/logolangwit.png" alt="kontakt logo">
        </div>
    </header>
    
    <main>
        <div class="welkom">
            <h1>Welkom bij Chiro Kontakt</h1>
            <p>
                Hallo!<br>
                Heb jij zin om leuke spelletjes te spelen, nieuwe vrienden te maken en avonturen te beleven?<br>
                Dan is Chiro Kontakt echt iets voor jou!<br>
                Iedere zondag kan je je bij ons komen amuseren!<br>
                Even concreet:<br>
                WIE: alle jongens en meisjes van zes tot achttien jaar (2015 - 2004).<br>
                WANNEER: iedere zondag van 14u – 17u30/19u.<br>
                WAAR: Spoorweglaan 24, 2850 Boom.<br>
                Als je nog twijfelt kom dan zeker eens langs!<br>
                Wij hopen jullie te zien en kijk gerust ook nog eens verder op onze site.<br>
                Groetjes,<br>   
                De jongens en meisjesleiding van Chiro Kontakt 
            </p>
        </div>
    </main>

    <?php include($base."includes/footer.php")?>
    
</body>
</html>