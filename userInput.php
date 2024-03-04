<a href="dataTransfer.php">Data Transfer</a>
<h1>User Input</h1>
<?php 
session_start();
echo $_SESSION['email'];
?>
<form action="controller.php" method="POST">
	<input type="number" name="number1" placeholder="Enter number 1"><br>
	<input type="number" name="number2" placeholder="Enter number 2"><br>
	<input type="submit" name="submit" value="Submit">
</form>


