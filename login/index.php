<?php
session_start();

$section = "log in";
$base = "../";

if (isset($_SESSION['role'])) {
    header("Location: ".$base."admin");
}

// auto fill form after error on submit
if (isset($_SESSION['loginPostdata'])) {
    $post = $_SESSION['loginPostdata'];
}
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
        <form class="userActionForm" action="./login.php" method="POST">
            <label for="mail">Email: </label>
            <input type="email" name="mail" id="mail" value="<?php echo isset($post['mail']) ? $post['mail'] : '' ?>">
            <label for="pass">Wachtwoord: </label>
            <input type="password" name="pass" id="pass">
            <img src="<?=$base?>includes/userActions/captcha.php" alt="captcha">
            <label for="captcha">Captcha</label>
            <input type="text" id="captcha" name="captcha" placeholder="Captcha" autocomplete="off" required>
            <input type="submit" value="submit" name="submit">
        </form>
        <a href="<?=$base?>forgot">Uw wachtwoord vergeten?</a>
        <?php
        if (isset($_GET['error'])) {
            echo "<span class='error'><p>".$_GET['error']."</p></span>";
        }
        ?>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>