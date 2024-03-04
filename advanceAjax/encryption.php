<h1>Encryption</h1>

<?php 
$password = '123456';
echo 'Your password is =>'.$password;

$password = md5('123456');
echo '<br>Your MD5 password is =>'.$password;

$password = md5('123456');
echo '<br>Your MD5 password is =>'.$password;

$password = base64_encode('123456');
echo '<br>Your base64_encode password is =>'.$password;

$password = base64_encode('123456');
echo '<br>Your base64_encode password is =>'.$password;

$password = base64_decode('MTIzNDU2');
echo '<br>Your base64_decode password is =>'.$password;
echo "<br>";
$password = password_hash('123456', PASSWORD_ARGON2I);
echo '<br>Your password_hash password is =>'.$password;

$password = password_hash('123456', PASSWORD_ARGON2I);
echo '<br>Your password_hash password is =>'.$password;

$password = password_hash('123456', PASSWORD_ARGON2I);
echo '<br>Your password_hash password is =>'.$password;


$password = password_hash('123456', PASSWORD_ARGON2I);
echo '<br>Your password_hash password is =>'.$password;
?>