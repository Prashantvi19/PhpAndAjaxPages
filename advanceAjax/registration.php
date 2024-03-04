<?php  
//error_reporting(0);
include('menubar.php');
// include_once('menubar.php');

// require('menubar.php'); 
//require_once('menubar.php'); 
?>
<style type="text/css">
	span{
		color: red;
	}
	.error{
		color: red;
	}
</style>

<h1>Registration</h1>
<?php
error_reporting(0);
if($_GET['msg']){
	echo $_GET['msg'];
}

if($_GET['error_msg']){
	echo '<span class="error">'.$_GET['error_msg'].'</span>';
}

?>

<form action="controller.php" method="POST">
	Name <span>*</span> : <input type="text" name="name"> 
	<?php 
	if(isset($_SESSION['error_ary']['name'])){
		echo $_SESSION['error_ary']['name'];
	} ?> <br>
	Email <span>*</span>: <input type="email" name="email">
	<?php 
	if(isset($_SESSION['error_ary']['email'])){
		echo $_SESSION['error_ary']['email'];
	} ?> <br>
	Contact: <span>*</span><input type="number" name="contact">
	<?php 
	if(isset($_SESSION['error_ary']['contact'])){
		echo $_SESSION['error_ary']['contact'];
	} ?> <br>
	Education: 
	<select name="education">
		<option value="be">BE</option>	
		<option value="btech">BTech</option>	
		<option value="bcom">BCom</option>	
		<option value="bca">BCA</option>	
		<option value="mca">MCA</option>	
	</select>
	<br>
	Password <span>*</span>: <input type="password" name="password">
	<?php 
	if(isset($_SESSION['error_ary']['password'])){
		echo $_SESSION['error_ary']['password'];
	} ?> <br>
	<input type="submit" name="register" value="Submit">
</form>

<?php include('footer.php'); ?>
