<?php 
session_start();

// session_unset('email');
session_destroy();
header('location:login.php');
?>