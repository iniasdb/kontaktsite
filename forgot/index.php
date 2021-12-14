<?php
session_start();

if (isset($_SESSION['role'])) {
    header("Location: ../profile");
}

$sectie = "Wachtwoord vergeten";
$base = "../";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include("../includes/head.php");?>
</head>
<body>

<?php
include($base."includes/nav.php");


// auto fill form after error on submit
if (isset($_SESSION['loginPostdata'])) {
    $post = $_SESSION['loginPostdata'];
}
?>

<main class="forgot">
    <h1><?=$sectie?></h1>

    <form class="userActionForm" method="POST" action="<?=$base?>includes/userActions/passReset.php">
        <label for="emailReset">Email: </label>
        <input type="text" name="emailReset" placeholder="Email" value="<?php echo isset($post['emailLogin']) ? $post['emailLogin'] : '' ?>" required><br><br>
        <input type="submit" name="submit" value="submit" id="submit"><br>
    </form>
    <?php
    if (isset($_GET['error'])) {
        echo "<span class='error'>".$_GET['error']."</span>";
    }
    ?>
</main>

<?php

include($base."includes/footer.php");

?>
    
</body>
</html>