<?php 
$name = 'Shyam';
$email = 'shyam@gmail.com';
echo $email;
echo "<br>";

session_start();
$_SESSION['email'] = 'ram@gmail.com'; // value assign
$_SESSION['name'] = 'ram'; // value assign
echo $_SESSION['email'] ;
?>