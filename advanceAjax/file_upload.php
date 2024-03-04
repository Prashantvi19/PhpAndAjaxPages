<h1>File Upload</h1>
<form action="controller.php" method="POST" enctype="multipart/form-data">
	Title: <input type="text" name="title"><br>
	File: <input type="file" name="file"><br>
	<input type="submit" name="file_upload" value="Submit">
</form>


<h2>List</h2>


<?php
include('db.php');
$qry = "select * from `file_upload`";
$result = mysqli_query($con, $qry);
?>

<table border="1">
	<thead>
		<th>Id</th>
		<th>Title</th>
		<th>FileName</th>
	</thead>
	<tbody>

		<?php  foreach ($result as $key => $value) { ?>
		
			<tr>
				<td><?php  echo $value['id']; ?></td>
				<td><?php  echo $value['title']; ?></td>
				<td>
					<a href="../images/<?php  echo $value['file_name']; ?>" target="_blank" download>
						<img src="../images/<?php  echo $value['file_name']; ?>" width="100">
					</a>
				</td>
			</tr>

		<?php } ?>
		
		
	</tbody>
</table>