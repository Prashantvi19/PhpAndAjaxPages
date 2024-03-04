<?php  include('menubar.php'); ?>
<?php // include_once('menubar.php'); ?>
<?php // require('menubar.php'); ?>
<?php // require_once('menubar.php'); ?>


<h1>Login</h1>
<form action="controller.php" method="POST">
	Email : <input type="email" name="emailid"><br>
	Password: <input type="password" name="password"><br>
	<input type="submit" name="loginbtn" value="Login">
</form>




<?php include('footer.php'); ?>