<?php
include("connect.php");

$sql = "SELECT * FROM teksten INNER JOIN tekstpaginas ON teksten.tekstPagina = tekstpaginas.paginaId WHERE tekstpaginas.paginaNaam = '$pagina'";
    
$qresult = $con->query($sql);

$bericht = "";    

if ($qresult->num_rows > 0) {
    while ($endresult = $qresult->fetch_assoc()) {
        
        $bericht = $endresult['tekstBericht'];    
        
        echo "<p>$bericht</p>";
    }
}



?>  