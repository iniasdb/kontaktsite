<?php

include("connect.php");

$sql = "SELECT * FROM `leiding` INNER JOIN afdelingnamen ON leiding.LeidingAfdelingId = afdelingnamen.afdelingId WHERE `jongens`= $jongens";

$qresult = $con->query($sql);

$naam = $bijnamen = $geboortejaar = $leeftijd = $studie = $moment = $lied = $eten = $dier = $inChiro = $ervaring = $toegevoegd = $img = $afdeling = "";
$jaar = date("Y");
$tijdSindsToegevoegd = "";
$vorigeAfdeling = "";
$i = 0;

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $nummer = $endresult['leidingNummer'];
        $naam = $endresult['leidingNaam'];
        $bijnamen = $endresult['leidingBijnaam'];
        $geboortejaar = date_format(date_create($endresult['leidingGeboortedatum']), "Y");
        $leeftijd = $jaar - $geboortejaar;
        $studie = $endresult['leidingStudie'];
        $moment = $endresult['leidingChiromoment'];
        $lied = $endresult['leidingChirolied'];
        $eten = $endresult['leidingLievelingseten'];
        $dier = $endresult['leidingLievelingsdier'];
        $toegevoegd = $endresult['leidingJaarToegevoegd'];
        $tijdSindsToegevoegd = $jaar - $toegevoegd;
        $inChiro = $endresult['leidingInchiro'] + $tijdSindsToegevoegd;
        $ervaring = $endresult['leidingErvaring'] + $tijdSindsToegevoegd;
        $img = $endresult['leidingImg'];

        if ($jongens === 1) $aanspreking = strtok($bijnamen, ',').$nummer;
        else $aanspreking = strtok($naam, ' ');
        $afdeling = $endresult['afdelingNaam'];

        if ($i == 0) {
            $vorigeAfdeling = $afdeling;
            echo "<h2>".strtoupper($afdeling)."</h2>";
        }

        if ($vorigeAfdeling != $afdeling) {
            echo "<h2>".strtoupper($afdeling)."</h2>";
            $vorigeAfdeling = $afdeling;
        }

        echo "
        <article>
            <h3>$aanspreking</h3>
            <div class='imgContainer'>
                <img src='".$base."images/leiding/$img' alt='$aanspreking'>
            </div>
            <div class='info'>
                <p>Naam: $naam</p>
                <p>Bijnamen: $bijnamen</p>
                <p>Leeftijd: $leeftijd</p>
                <p>Studie/werk: $studie</p>
                <p>Favoriete chiromoment: $moment</p>
                <p>Favoriete chirolied: $lied</p>
                <p>Lievelingseten: $eten</p>
                <p>Lievelingsdier: $dier</p>
                <p>Aantal jaar in de chiro: $inChiro</p>
                <p>Aantal jaar leiding: $ervaring</p>
            </div>
        </article>
        ";
        $i++;
    }
}


?>