<h1>String function</h1>
<?php 
	$name = ' ram';
	$lname = 'kumar';
	$fullName = $name.' '.$lname;	
	echo $fullName; // ram kumar

	echo "<br>ucfirst =>";
	echo ucfirst($fullName);

	echo "<br>strtoupper=>";
	echo strtoupper($fullName);
	echo "<br>str_replace =>";

	echo  str_replace('kumar', 'Patel', $fullName);

	echo "<br>str_word_count => ";
	echo str_word_count($fullName); // 2

	echo "<br>strlen=>";
	echo strlen($fullName);

	echo "<br>strpos=>"	;
	echo strpos($fullName, 'a');

	echo "<br>str_repeat=>";	
	echo str_repeat($fullName, 3);	
?>

<h2>Array Functions</h2>
<?php 
		$array = [2,9,11];
		$array2 = [3];	
		echo "<br>count =>";	
		echo  count($array); // 6

		echo "<br>array_merge =>";
		print_r(array_merge($array,$array2));	

		echo "<br>array_push => ";
		array_push($array, 11);
		print_r($array);

		echo "<br>array_splice =>";
		//print_r(array_merge($array,  $array2));	

		$myAry = [1,2,5];
		$numberAdd = [4,5,6];
		$position = 2;
		$result = array_merge(
			array_splice($myAry, 0,$position), 
			$numberAdd, 
			array_splice($myAry, $position)
		);
		print_r($result);
		echo "<br>";

		$myAry = [1,2,5];
		$numberAdd = [4,5,6];
		$position = 1;
		$result = array_merge(
			array_splice($myAry, 1,$position), 
			$numberAdd, 
			array_splice($myAry, $position)
		);
		print_r($result);
?>
<h2>Array Sort</h2>
<ul>
	<li>sort</li>
	<li>aSort</li>
	<li>rsort</li>
	<li>arsort</li>
	<li>ksort</li>
	<li>krsort</li>
</ul>

<?php 
	echo "<pre>";	
	echo "<br> ----- sort -----";
	$strAry = ['red', 'pink','blue','black'];
	sort($strAry);
	print_r($strAry);	

	echo "<br> ----- sort -----";
	$nuberArray = [2,5,3,7,44,6,5];
	sort($nuberArray);
	print_r($nuberArray);

	echo "<br> ----- asort -----";
	$nuberArray = [2,5,3,7,44,6,5];
	asort($nuberArray);
	print_r($nuberArray);

	echo "<br> ----- rsort -----";
	$nuberArray2 = [2,5,3,7,44,6,5];
	rsort($nuberArray2);
	print_r($nuberArray2);

	$studentAry = [
		'Ram' => 44,
		'Shyam'=> 32,
		'Mohan' => 55
	];


	echo "<br> ----- ksort -----";
	ksort($studentAry);
	print_r($studentAry);

	echo "<br> ----- krsort -----";
	krsort($studentAry);
	print_r($studentAry);

	echo "<br> ----- arsort -----";
	arsort($studentAry); // according to value decending
	print_r($studentAry);

	echo "<br> ----- asort -----";
	asort($studentAry); // according to value acending
	print_r($studentAry);

	$nuberArray2 = [2,5,3,7,44,6,5];
	for($i=0;$i<= count($nuberArray2)-1; $i++){
		echo "<br>".$nuberArray2[$i];
	}

	echo "<br>Reverce Array<br>";
	for($i=count($nuberArray2)-1;$i >= 0; $i--){
		echo "<br>".$nuberArray2[$i];
	}

	echo "<br>----Foreach----</br>";
	$total = count($nuberArray2);
	$minval = 0;
	foreach ($nuberArray2 as $value) {
		$total--;
		echo "<br>each=> ".$nuberArray2[$total];
	}
?>

<h2>Functions</h2>
<?php 
echo "Random =>";
echo rand(1000,9999);
echo "<br>time<br>";
echo time();
?>