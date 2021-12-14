<?php
session_start();

$section = "register";
$base = "../";

if (isset($_SESSION['role'])) {
    header("Location: ".$base."admin");
}

// auto fill form after error on submit
if (isset($_SESSION['regPostdata'])) {
    $post = $_SESSION['regPostdata'];
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
    
    <main class="register">
        <h1><?=$section?></h1>
        <form class="userActionForm" method="POST" action="register.php">
            <label for="fname">Voornaam</label>
            <input type="text" name="fname" id="fname" placeholder="First name" value="<?php echo isset($post['fname']) ? $post['fname'] : '' ?>" required>
            <label for="lname">Achternaam</label>
            <input type="text" name="lname" id="lname" placeholder="Last name" value="<?php echo isset($post['lname']) ? $post['lname'] : '' ?>" required>
            <label for="mail">Email</label>
            <input type="text" name="mail" id="mail" placeholder="Email" value="<?php echo isset($post['mail']) ? $post['mail'] : '' ?>" required>
            <label for="pass">Wachtwoord</label>
            <input type="password" name="pass" id="pass" placeholder="Password" required>
            <label for="passConfirm">Herhaal wachtwoord</label>
            <input type="password" name="passConfirm" id="passConfirm" placeholder="Confirm password" required>
            <label for="captcha">Captcha</label>
            <img src="<?=$base?>includes/userActions/captcha.php" alt="captcha">
            <input type="text" id="captcha" name="captcha" placeholder="Captcha" autocomplete="off" required>
            <input type="submit" value="Submit" id="submit"><br>
        </form>
        <?php
        if (isset($_GET['error'])) {
            echo "<span class='error'><p>".$_GET['error']."</p></span>";
        }
        ?>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>