<a href="index.php">Index</a>
<a href="basics.php">Basic</a>
<a href="array.php">Array</a>

<h1>Array</h1>
1) Simple Array/Single Array
2) 2d array (Key=>value)
3) 3d array/MultiDymention array

<h3>Simple/Single Array</h3>
<?php 
	echo "<pre>";
	$name = 'Raj';
	$nameArray = ['Raj','Vikash','Anikesh','Prashant'];	// 3 count
	$nameArray2 = [2,'Vikas',3,4];	

	echo "Hello, this is array example<br>";
	echo $name."<br>"; // string type
	print_r($nameArray); // array print
	echo "<br>";
	var_dump($nameArray2);// array print
	
	echo "<br>";
	echo $nameArray[0]; // Raj
	
	echo "<br>";
	echo $nameArray[3]; // Prashant
	array_push($nameArray, 'Tanu');
	print_r($nameArray);
	
	echo "<br>";
	array_push($nameArray, 'Ujala');
	print_r($nameArray);

	echo "<br>";
	$nameArray[2] = 'Anikes';
	print_r($nameArray);

	echo "<br>---Array Count--<br>";
	echo count($nameArray); // 6

	echo "<br>array merge<br>";
	print_r(array_merge($nameArray,$nameArray2));


?>


<h3>2d Array(Key & Values)</h3>
<?php
	$studentArray = [ 
		101 => 'Ram',
		102 => 'Raj',
		103 => 'Mohan',
		104 =>'Shyam'
	];

print_r($studentArray);
echo "<br>";
print_r($studentArray[101]); // Ram

?>
<h3>Multiple Array</h3>
<?php
	
	$nameArray = ['Ram','Mohan','Shyam'];
	$classArray = ['BE','BTech','Bcom','BA'];
	$subjectArray = ['PHP','Java'];

	$resultArray = [
		'name_array' => $nameArray,
		'class_array' => $classArray,
		'subject_array' => $subjectArray
	];
	print_r($resultArray);
	
?>