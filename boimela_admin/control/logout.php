<?php 
session_start(); 
unset($_SESSION['login_user']);
header("location: ../view/AdminLogin.php");
    die();
?>