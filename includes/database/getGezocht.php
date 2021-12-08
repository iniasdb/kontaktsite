<?php

include("connect.php");

$sql = "SELECT * FROM `gezocht`";

$qresult = $con->query($sql);

$item = "";

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $item = $endresult['gezochtItem'];    

        echo "<li>$item</li>";
    }
}


?>