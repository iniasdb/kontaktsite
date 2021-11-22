<?php
$section = "tapperskrant";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php 
    include($base."includes/nav.php");
    include("./loadPDF.php");
    ?>
    
    <main class="tapperskrant">
        <h1><?=$section?></h1>
        <h2>Hier vindt u elke 3 maand de nieuwste tapperskrant terug!</h2>
        <h3>De tapperskrant van <?=$month." ".$year?></h3>
        <iframe src="<?=$base?>tapperskrantArtikels/<?=$code?>.pdf" frameborder="0">
            Helaas, uw browser ondersteunt geen iframes.
        </iframe>
        <h3>Oudere tapperskranten</h3>
        <ul>
            <a href="./?edition=1020"><li>Oktober 2020</li>
            <a href="./?edition=0419"><li>April 2019</li></a>
            <a href="./?edition=0219"><li>Februari 2019</li></a>
            <a href="./?edition=1018"><li>Oktober 2018</li>
            <a href="./?edition=0518"><li>Mei 2018</li></a>
            <a href="./?edition=0218"><li>Februari 2018</li></a>
            <a href="./?edition=1017"><li>Oktober 2017</li></a>
        </ul>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>