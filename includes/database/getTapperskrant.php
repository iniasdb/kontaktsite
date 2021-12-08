<?php

include("connect.php");

$sql = "SELECT * FROM `tapperskrant` ORDER BY tapperskrantDatum DESC";

$qresult = $con->query($sql);
$code = $month = $year = "";

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $code = $endresult['tapperskrantCode']; 

        $month = getMonthYear($code);
        $year = "20".substr($code, 2);
    

        echo "<a href='./?edition=$code'><li>$month $year</li></a>";

    }
}


?>