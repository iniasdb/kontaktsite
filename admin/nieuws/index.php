<?php
session_start();

$section = "nieuwsbericht toevoegen";
$base = "../../";

if (!isset($_SESSION['role']) || $_SESSION['role'] == 1) {
    header("Location: ".$base."profile");
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
        <form action="<?=$base?>includes/adminActions/addNews.php" method="POST">
            <label for="title">Titel</label>
            <input type="text" name="title" id="title">
            <label for="message">Bericht</label>
            <textarea name="message" id="message"></textarea>
            <script>
                CKEDITOR.replace( 'message' );
            </script>
            <input type="submit" placeholder="Toevoegen">
        </form>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>