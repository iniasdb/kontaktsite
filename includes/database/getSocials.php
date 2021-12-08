<?php

include("connect.php");

$sql = "SELECT * FROM `socials` INNER JOIN socialstype ON socials.socialType = socialstype.typeId LIMIT 6";

$qresult = $con->query($sql);

$naam = $link = $type = "";

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $naam = $endresult['socialNaam'];     
        $link = $endresult['socialLink'];
        $type = $endresult['typeNaam'];

        echo "
            <div id='fbm'>
                <a href='$link' target='_blank'><p><i class='fab fa-$type'></i><br>$naam</p></a>
            </div>
        ";
    }
}


?>