<?php 
    session_start();
    $_SESSION['adminlogin'] == "";
    session_unset();
    header('location: login.php');
?>