<?php 
session_start();
unset($_SESSION['ADMIN_LOGIN']);
unset($_SESSION['USERNAME']);
header('location:login.php');
?>