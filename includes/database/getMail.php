<?php
include("connect.php");

function getFooter() {
    $sql = "SELECT * FROM `mails` WHERE `inFooter` = 1 ORDER BY `groep`";
    execute($sql, 2);
}

function getJongens() {
    $sql = "SELECT mails.mailAdres, groepen.groepNaam, functies.functieNaam FROM `mails` INNER JOIN groepen ON mails.groep = groepen.groepId INNER JOIN functies ON mails.functie = functies.functieId WHERE `groep` = 1 ORDER BY `functie`";
    execute($sql, 1);
}

function getMeisjes() {
    $sql = "SELECT mails.mailAdres, groepen.groepNaam, functies.functieNaam FROM `mails` INNER JOIN groepen ON mails.groep = groepen.groepId INNER JOIN functies ON mails.functie = functies.functieId WHERE `groep` = 2 ORDER BY `functie`";
    execute($sql, 1);
}

function getGemengd() {
    $sql = "SELECT mails.mailAdres, groepen.groepNaam, functies.functieNaam FROM `mails` INNER JOIN groepen ON mails.groep = groepen.groepId INNER JOIN functies ON mails.functie = functies.functieId WHERE `groep` = 3 ORDER BY `functie`";
    execute($sql, 1);
}

function getVerhuur() {
    $sql = "SELECT mails.mailAdres FROM `mails` WHERE `functie` = 4";
    execute($sql, 3);
}

function execute($sql, $method) {
    global $con;
    
    $qresult = $con->query($sql);

    $mail = $functie = "";    

    if ($qresult->num_rows > 0) {
        while ($endresult = $qresult->fetch_assoc()) {
            
            $mail = $endresult['mailAdres'];    
            
            if ($method === 1) {
                $functie = ucfirst($endresult['functieNaam']);
                echo "<p>$functie: <a href='mailto:$mail'>$mail</a></p>";
            } else if ($method === 2) {
                echo "<p><a href='mailto:$mail'>$mail</a></p>";
            } else {
                echo "<a href='mailto:$mail'>$mail</a>";
            }
        }
    }
}


?>  