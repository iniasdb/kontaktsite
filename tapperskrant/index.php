<?php
session_start();

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

        <?php
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        if (stripos( $user_agent, 'Safari') !== false) {
            echo "<div class='pdfContainer'><a id='pdfDownload' href='".$base."tapperskrantArtikels/$code.pdf' download><i class='far fa-file-pdf'></i></a></div>";
        } else {
            echo "
            <iframe src='".$base."tapperskrantArtikels/$code.pdf' frameborder='0'>
                Helaas, uw browser ondersteunt geen iframes.
            </iframe>
            ";
        }
        ?>

        <h3>Oudere tapperskranten</h3>
        <ul>
            <?php include($base."includes/database/getTapperskrant.php");?>
        </ul>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>