<?php  include('menubar.php'); 

include('db.php');
$email = $_SESSION['email'];

$qry = "SELECT * FROM `users` WHERE `email`='$email'";
$result = mysqli_query($con,$qry);
$data =	$result->fetch_assoc();

?>

<h1>Profile</h1>
<h3>Welcome <?php echo $data['name']; ?>, to our portal</h3>

Your Name : <?php echo $data['name']; ?> <br>
Your Email: <?php echo $_SESSION['email'];  ?><br>
Your Contact: <?php echo $data['contact']; ?><br>
