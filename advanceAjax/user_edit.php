<h1>Edit Profile</h1>
<?php 
include('menubar.php'); 
include('db.php');

 if(isset($_GET['id'])){
 	$id = $_GET['id'];
 }else{
 	echo "<h2>User Id not found</h2>";
 	die();
 }

$qry = "select * from `users` where `id`= $id";
$record = mysqli_query($con,$qry);
$data = $record->fetch_assoc();
?>

<form action="controller.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>"><br>
	Name : <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
	Email: <input type="email" name="email" value="<?php echo $data['email']; ?>" readonly ><br>
	Contact: <input type="number" name="contact" value="<?php echo $data['contact']; ?>"><br>
	Education: 
	<select name="education">
		<option value="be"  <?php echo ($data['education'] == 'be' ? 'selected="true"' : '' ); ?>>BE</option>	
		<option value="btech" <?php echo ($data['education'] == 'btech' ? 'selected="true"' : '' ); ?>>BTech</option>	
		<option value="bcom" <?php echo ($data['education'] == 'bcom' ? 'selected="true"' : '' ); ?>>BCom</option>	
		<option value="bca" <?php echo ($data['education'] == 'bca' ? 'selected="true"' : '' ); ?>>BCA</option>	
		<option value="mca" <?php echo ($data['education'] == 'mca' ? 'selected="true"' : '' ); ?>>MCA</option>	
	</select>
	<br>
	<input type="submit" name="update_user" value="Submit">
</form>