<a href="userInput.php?id=5">User Input</a>
<h1>Data Transfer</h1>
<?php 
	session_start();
	echo $_SESSION['email'];
?>


<?php 
	coockies_start();
	echo $_COOCKIES['email'];
?>
<h3>1. Using form acton </h3>
<h3>2. By URL : URL redirect</h3>
<h3>SESSION</h3>
<h3>Coockies</h3>
