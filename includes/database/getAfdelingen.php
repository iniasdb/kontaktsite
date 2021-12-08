<?php

include("connect.php");

$sql = "SELECT * FROM `afdelingen` INNER JOIN afdelingnamen ON afdelingen.afdelingNaam = afdelingnamen.afdelingId WHERE `actief`=1 ";

$qresult = $con->query($sql);

$naam = $maxLeeftijd = $minLeeftijd = $beschrijving = $img = "";

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $naam = $endresult['afdelingNaam'];
        $minLeeftijd = $endresult['afdelingMinLeeftijd'];
        $maxLeeftijd = $endresult['afdelingMaxLeeftijd'];
        $beschrijving = $endresult['afdelingBeschrijving'];
        $img = $endresult['afdelingAfbeelding'];        

        echo "<article>
        <div class='afdelingTitle'>
            <h1>$naam</h1>
            <h3>Leeftijd:</h3>
            <p class='leeftijd'>$minLeeftijd - $maxLeeftijd (". (date("Y")-($maxLeeftijd-1))." - ".(date("Y")-$minLeeftijd).")</p>
        </div>
        <img src='".$base."images/afdelingsfotos/$img' alt='$naam'>
        <div class='afdelingsInfo'>
            <p>$beschrijving</p>
        </div>
    </article>";
    }
}


?>