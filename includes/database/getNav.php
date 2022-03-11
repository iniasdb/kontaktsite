<?php

include("connect.php");

$sql = "SELECT * FROM `nav` WHERE `actief`=1 ";

$qresult = $con->query($sql);

$navItem = "";
$i = 0;

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $navId = $endresult['navId'];
        $navItem = $endresult['navItem'];
        if ($i === 0) {
            echo "<li><a href='$base'>". strtoupper($navItem)."</a></li>";
        } else {
            $hasChild = $endresult['hasChild'];
            if ($hasChild == 1) {
                echo "<li><a href='".$base."$navItem'>". strtoupper($navItem)."</a><ul>";

                $sql = "SELECT * FROM subnav WHERE parentId = $navId AND actief=1";
                $qresult2 = $con->query($sql);
                
                if ($qresult2->num_rows > 0) {
                    
                    while ($endresult2 = $qresult2->fetch_assoc()) {
                        $subnavItem = $endresult2['subnavItem'];
                        echo "<li><a href='".$base.$navItem."/".$subnavItem."'>". strtoupper($subnavItem)."</a></li>";
                    }
                    echo "</ul></li>";
                }
            } else {
                echo "<li><a href='".$base."$navItem'>". strtoupper($navItem)."</a></li>";
            }
        }
        $i++;

    }
}

?>