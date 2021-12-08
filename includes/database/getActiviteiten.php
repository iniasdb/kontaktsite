<?php

include("connect.php");

$sql = "SELECT * FROM `activiteiten`";

$qresult = $con->query($sql);

$naam = $link = $beginDatum = $eindDatum = "";

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $naam = $endresult['activiteitNaam'];
        $link = $endresult['activiteitLink'];
        $beginDatum = date_format(date_create($endresult['activiteitStartdatum']), 'd/m/y');
        $eindDatum = date_format(date_create($endresult['activiteitEinddatum']), 'd/m/y');
        $meerdaags = $endresult['meerdaags'];

        echo "<li>";

        echo "$beginDatum";
        //echo $meerdaags ? " : $eindDatum" : "";
        echo "&emsp;";
        if (!empty($link)) echo "<a href='$link' target='_blank'>";
        echo $naam;
        if (!empty($link)) echo "</a>";
        echo "</li>";
    }
}


?>