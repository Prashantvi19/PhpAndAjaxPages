<a href="index.php">Index</a>
<a href="basics.php">Basic</a>
<a href="array.php">Array</a>
<a href="loop.php">Loops</a>

<h1>Loop's</h1>
<h4>For loop</h4>
<h4>while</h4>
<h4>do while</h4>
<h4>For Each</h4>

<h1>For Loop</h1>
<?php 
		$i=2;
		for ($i; $i <= 20; ) { 
			echo $i;
			$i = $i+2;
			echo '<br>';
		}
?>
<h2>While Loop</h2>
<?php 
	$j = 12;
	while ($j <= 10) {
		echo "<br>J value =>".$j;
		$j++;
	}
?>

<h2>Do While Loop</h2>
<?php 

	$j = 12;
	do{
		echo "<br>J value =>".$j;
	}while($j <= 10);

?>
<h2>ForEach</h2>
<?php  
	$studentRecord = [
		101 => 'Ram',
		102 => 'Ujala',
		103 => 'Tanu',
		104 => 'Raj',
		105 => 'Anikesh',
		106 => 'Prashant',
		107 => 'Vikas',
	];
	foreach ($studentRecord as $k => $v) {
		echo "<br>Name=".$k.' '.$v;
	}
?>

<h2>Student List</h2>
<table border="1">
	<thead>
		<th>S/No.</th>
		<th>Roll No.</th>
		<th>Name</th>
		<th>Action</th>
	</thead>
	<tbody>
		<?php 
			$i = 1;
			foreach ($studentRecord as $key => $value) {	
		?>
			<tr>
				<td><?php echo $i++;  ?></td>
				<td><?php echo $key;  ?></td>
				<td><?php echo $value; ?></td>
				<td>X</td>
			</tr>
		<?php  } ?>
	</tbody>
</table>
