<?php
session_start();
$base = "../../";
include($base."includes/database/connect.php");


$type = $_GET['type'];
$id = $_GET['id'];
$title = $message = "";

$section = "$type $id aanpassen";
$base = "../../";

$sql = "SELECT * FROM `nieuws` WHERE nieuwsId = $id";
$qresult = $con->query($sql);

$titel = $bericht = $posted = "";

if ($qresult->num_rows > 0) {
    $endresult = $qresult->fetch_assoc();
    $title = $endresult['nieuwsTitel'];     
    $message = $endresult['nieuwsBericht'];
    echo $titel;
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="edit">
        <h1><?=$section?></h1>
        <form action="saveEdit.php" method="POST">
            <input type="hidden" name="id" value="<?=$id?>">
            <label for="title">Titel</label>
            <input type="text" name="title" id="title" value="<?php echo $title?>">
            <label for="message">Bericht</label>
            <textarea name="message" id="message"><?php echo $message?></textarea>
            <script>
                CKEDITOR.replace( 'message' );
            </script>
            <input type="submit" placeholder="Toevoegen">
        </form>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>