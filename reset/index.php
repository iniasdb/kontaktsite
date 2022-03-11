<?php
session_start();

$section = "Wachtwoord reset";
$base = "../";

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>

    
    <main class="reset">
        <h1><?=$section?></h1>
        <?php
        if (isset($_GET['id'])) {

            $id = checkInput($_GET['id']);
            $user = checkInput($_GET['user']);

            $sql = "SELECT * FROM `user` WHERE `userId`='$user' AND userRegCode = '$id'";

            $qresult = $con->query($sql);

            if ($qresult->num_rows > 0) {
                echo "<div class='changePass'>
                        <h2>Wachtwoord veranderen</h2>
            
                        <form class='userActionForm' action='".$base."includes/userActions/changePassAction.php' method='POST'>
                            <label for='new1'>new password</label>
                            <input type='password' name='new1' id='new1'>
                            <label for='new2'>repeat</label>
                            <input type='password' name='new2' id='new2'>
                            <input type='submit' value='Change password'>
                            <input type='hidden' name='email' value='$user'>";
                        echo "</form>";
                        if (isset($_GET['error'])) {
                            echo "<span class='error'><p>".$_GET['error']."</p></span>";
                        }
                        echo "</div>";
            } else {
                echo "<h2>Foute id</h2>";
            }

        }

        function checkInput($input) {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }
        ?>    
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>