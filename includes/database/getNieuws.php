<?php
setlocale(LC_ALL, 'nl_NL');

include("connect.php");

if (isset($limit)) {
    $sql = "SELECT * FROM `nieuws` ORDER BY `datePosted` DESC LIMIT $limit";
} else {
    $sql = "SELECT * FROM `nieuws` ORDER BY `datePosted` DESC";
}

$qresult = $con->query($sql);

$titel = $bericht = $posted = "";

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $titel = $endresult['nieuwsTitel'];     
        $bericht = $endresult['nieuwsBericht'];
        $id = $endresult['nieuwsId'];
        $posted = date_format(date_create($endresult['datePosted']), "D, d M, Y - h:m");

        echo "<article>";

        if (isset($_SESSION['role']) && $_SESSION['role'] != 1) {
            echo "<a href='$base/includes/adminActions/editContent.php?type=nieuws&id=$id'><button>edit</button></a>";
        }    

        echo "<h1>$titel</h1>
                <p id='timestamp'>$posted</p>
                <p>$bericht</p>
            </article>";
    }
}


?>