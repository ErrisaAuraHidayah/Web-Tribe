<?php 
    session_start();
    unset($_SESSION["ID"]);
    unset($_SESSION["Name"]);
    unset($_SESSION["Email"]);
    unset($_SESSION["Password"]);
    unset($_SESSION["Phone"]);
    unset($_SESSION["status_login"]);
    header("Location: log in.php")
?>