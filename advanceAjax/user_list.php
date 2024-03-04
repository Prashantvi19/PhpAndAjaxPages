<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<h1>User List</h1>
<?php 
include('menubar.php');

include('db.php');
$qry = "select * from `users`";
$result = mysqli_query($con, $qry);
$totalCount = $result->num_rows;
//$myResult = $result->fetch_assoc(); // convert object to array
//$myResult = mysqli_fetch_assoc($result); // convert object to array
?>

<table border="1">
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Delete</th>
	</thead>
	<tbody>

		<?php  foreach ($result as $key => $value) { ?>
		
			<tr id="rowid_<?php  echo $value['id']; ?>">
				<td><?php  echo $value['id']; ?></td>
				<td><?php  echo $value['name']; ?></td>
				<td><?php  echo $value['email']; ?></td>
				<td><?php  echo $value['contact']; ?></td>
				<td>
					<!-- <a onClick="if(confirm('Are u sure?????')){return true}else{return false}" href="controller.php?user_delete_id=<?php  echo $value['id']; ?>">Delete</a> -->

					<a onClick="deleteData(<?php  echo $value['id']; ?>)" href="#" >Delete</a>

					<a href="user_edit.php?id=<?php  echo $value['id']; ?>">Edit</a>
				</td>
			</tr>

		<?php } ?>
		
		
	</tbody>
</table>

<script type="text/javascript">
	function deleteData(id){
		$.ajax({
			url: 'controller.php?user_delete_id='+id,
		    type: 'GET',  // http method
		    //data:{user_delete_id:'4'}, 
		    success: function (data) {
		    	console.log(JSON.stringify(data));
		    	console.log(data.status);
		    	if(data){
		        	//alert('Successfully deleted');
		        	$('#rowid_'+id).remove();

		    	}else{
		        	alert('Not deleted');
		    	}
		    },
		    error: function ( errorMessage) {
		        alert('Error => '+errorMessage);
		    }
		});
	}
</script>


<p id="p1">this is p1</p>
<p id="p2">this is p2</p>
<a href="#" id="a1">click a1</a>
<a href="#" id="a2">click a2</a>

<script type="text/javascript">
	$('#a1').on('click',function(){
		$('#p1').toggle();
	});
	$('#a2').on('click',function(){
		$('#p2').toggle();
	});
</script>