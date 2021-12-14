<?php
$role = $loggedIn = 0;

if (isset($_SESSION['role'])) {
    $loggedIn = 1;
    $role = $_SESSION['role'];
}

?>

<div class="profileNav">
    <ul>
        <?php 
        if ($loggedIn == 1) {
            echo "<li><a href='".$base."logout.php'>Logout</a></li>";
            echo ($role == 2 || $role == 3) ? "<li><a href='".$base."profile'>Profile</a></li><li><a href='".$base."admin'>Admin</a></li>" : "<li><a href='".$base."profile'>Profile</a></li>";
        } else {
            echo "<li><a href='".$base."login'>Log in</a></li><li><a href='".$base."register'>Register</a></li>";
        }
        ?>  
    </ul>
</div>
