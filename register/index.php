<?php
session_start();

$section = "register";
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
    
    <main class="register">
        <h1><?=$section?></h1>
        <form method="POST" action="register.php">
            <label for="fname"></label>
            <input type="text" name="fname" id="fname" placeholder="First name" required><br><br>
            <label for="lname"></label>
            <input type="text" name="lname" id="lname" placeholder="Last name" required><br><br>
            <label for="mail"></label>
            <input type="text" name="mail" id="mail" placeholder="Email" required><br><br>
            <label for="pass"></label>
            <input type="password" name="pass" id="pass" placeholder="Password" required><br><br>
            <label for="passConfirm"></label>
            <input type="password" name="passConfirm" id="passConfirm" placeholder="Confirm password" required><br><br>
            <input type="submit" value="Submit" id="submit"><br>
        </form>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>