<?php

include("connect.php");

$sql = "SELECT * FROM `nav` WHERE `actief`=1 ";

$qresult = $con->query($sql);

$navItem = "";
$i = 0;

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $navItem = $endresult['navItem'];     

        if ($i === 0) echo "<li><a href='$base'>". strtoupper($navItem)."</a></li>";
        else echo "<li><a href='".$base."$navItem'>". strtoupper($navItem)."</a></li>";
        $i++;
    }
}


?>