<?php
    session_start();
    if(isset($_SESSION['username'])) {
        session_unset();
        session_destroy();
        setcookie('username', '', -1, '/');
        header("location: index.php");
    } else
        header("location: index.php");
?>