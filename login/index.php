<?php
$section = "log in";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
    <script src="<?=$base?>js/leidingpicture.js"></script>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="login">
        <h1><?=$section?></h1>
        <form action="./login.php" method="POST">
            <label for="mail">Email: </label>
            <input type="email" name="mail" id="mail">
            <label for="pass">Wachtwoord: </label>
            <input type="password" name="pass" id="pass">
            <input type="submit" value="submit" name="submit">
        </form>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>