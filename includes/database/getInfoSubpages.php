<?php
include("connect.php");

$sql = "SELECT * FROM subnav WHERE parentId=2 AND actief=1";
$qresult2 = $con->query($sql);

if ($qresult2->num_rows > 0) {
    echo "<div class='links'>";
    while ($endresult2 = $qresult2->fetch_assoc()) {
        $subnavItem = $endresult2['subnavItem'];
        if ($subnavItem === "Algemeen") {
            echo "<a href='".$base."info/'><h4>".$subnavItem."</h4></a>";
        } else {
            echo "<a href='".$base."info/".$subnavItem."'><h4>".$subnavItem."</h4></a>";
        }
    }
    echo "</div>";
}

?>