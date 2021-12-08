<?php
include("connect.php");

$sql = "SELECT * FROM `adres` WHERE `active` = 1";

    
$qresult = $con->query($sql);

$straat = $nummer = $gemeente = $postcode = "";    

if ($qresult->num_rows > 0) {
    $endresult = $qresult->fetch_assoc();

    $straat = $endresult['straatNaam'];
    $nummer = $endresult['nummer'];
    $gemeente = $endresult['gemeente'];
    $postcode = $endresult['postcode'];
    
    echo "
        <p>$straat $nummer</p>
        <p>$postcode $gemeente</p><br>
    ";
}


?>  