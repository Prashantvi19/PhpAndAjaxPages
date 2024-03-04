<?php 
	// Using Object
	// => Procedural Language
	// PDO 
	
	$host = 'localhost';
	$username = 'root';
	$password = 'root';
	$dbName = 'training2023php';
	$con = mysqli_connect($host,$username,$password,$dbName);
	if(mysqli_connect_errno()){
		echo "database not connected".mysqli_connect_error();
		die();
	}else{
		//echo "database connected";
	}
	
?>