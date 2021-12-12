<?php

include("connect.php");

$sql = "SELECT * FROM `verhuur` WHERE `active` = 1";

$qresult = $con->query($sql);

$titel = $prijs = $waarborg = $img = "";

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $titel = $endresult['verhuurNaam'];     
        $prijs = $endresult['verhuurPrijs'];
        $waarborg = $endresult['verhuurWaarborg'];
        $img = $endresult['verhuurAfbeelding'];

        echo "
            <article class='item'>
                <img src='".$base."images/verhuur/$img' alt='$titel'>
                <div class='infoContainer'>
                    <h1>$titel</h1>
                    <p>€$prijs huur</p>
                    <p>€$waarborg waarborg</p>
                </div>
            </article>";
    }
}


?>