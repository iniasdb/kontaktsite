<?php
session_start();

$section = "trooper";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="trooper">
        <h1><?=$section?></h1>
        <h2>Chiro Kontakt is officieel lid van trooper!</h2>
        <p>Koop jij wel eens iets online? Surf dan voortaan eerst naar onderstaande link en ga via die site naar de juiste webshop! Jij betaalt geen cent meer, maar Chiro Kontakt krijg wel een procentje op het bedrag dat jij besteedde! En dat bedrag gaat rechtstreeks naar onze bouwkas!! Zo helpen jullie zonder enige verdere moeite onze bouwplannen mogelijk te maken!! Dikke merci!!! </p>
        <h2>Hoe werkt trooper</h2>
        <ol>
            <li>Surf naar onze trooperpagina via deze link <a href="https://www.trooper.be/nl/trooperverenigingen/chirokontakt" target="_blank">https://www.trooper.be/chirokontakt</a>, of gebruik de iframe verder op deze pagina.</li>
            <li>Kies je shop en klik op de banner.</li>
            <li>Geef je gegevens is (dit is volledig optioneel).</li>
            <li>Doe je aankoop net zoals anders.</li>
            <li>De shop schenkt een percent aan je vereniging. (gemiddeld is dit 5% op je aankoopbedrag)</li>
        </ol>
        <div class="deelnemers">
            <h2>Deelnemende shops</h2>
            <ul>
                <li>Lidl</li>
                <li>De Bijenkorf</li>
                <li>Bol.com</li>
                <li>Booking.com</li>
                <li>Coolblue</li>
                <li>Farmaline</li>
                <li>Krefel</li>
                <li>JBC</li>
                <li>DreamLand</li>
                <li>Takeaway.com</li>
                <li>Center Parcs</li>
                <li>Torfs</li>
                <li>A.S. Adventure</li>
                <li>AliExpress</li>
                <li>Zalando</li>
                <li>Ici Paris XL</li>
                <li>Fun</li>
                <li>Zeb</li>
                <li>Nike</li>
                <li>E5 Mode</li>
            </ul>
            <a href="https://www.trooper.be/nl/troopershops" target="_blank"><button>En nog meer dan 600 anderen</button></a>
        </div>
        <h2>Nog vragen?</h2>
        <p>Je kan terecht op de faq van trooper!</p>
        <a href="https://www.trooper.be/nl/meest-gestelde-vragen" target="_blank">https://www.trooper.be/nl/meest-gestelde-vragen</a>
    </main>
    <iframe id="trooper" src="https://www.trooper.be/nl/trooperverenigingen/chirokontakt" frameborder="0" loading="lazy"></iframe>


    <?php include($base."includes/footer.php")?>

</body>
</html>