<?php 
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['status']);
    unset($_SESSION['level']);
    session_destroy();

    header('Location: ../index.php');
?>