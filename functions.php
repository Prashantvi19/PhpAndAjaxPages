<h1>PHP User Define Functions</h1>
<?php 

	function namePrint($name){
		echo $name;
		echo "<br>";
	}

	function math_add($a,$b){
		echo $a + $b;
		echo "<br>";
	}

	math_add(3,5);
	math_add(9,15);
	namePrint('Rahul');


	function welcomeMsg(){
		echo "Welcome to our website.............";
	}
	welcomeMsg();
?>
 

<?php  
	function sum($a,$b=0, $c = 5){
		echo "<br>Total of 2 number is => ".$a + $b + $c;
	}

	sum(3,5);
	sum(3,5,8);
	sum(3,'22 number');
?> 


<?php 
	function getResult($id){
		$qry = "select * from tablename where `id`=$id";
		//$reuult = mysqli_query($con,$qry);
		$ary['maths'] = '45';
		$ary['physics'] = '99';
		$ary['chemistry'] = '34';
		$ary['hindi'] = '76';
		$ary['english'] = '45';
		return $ary;
	}

	$result = getResult(4);
	echo "<br>Maths number => ".$result['maths'];
	echo "<br>physics number => ".$result['physics'];
	
?>


<?php 
	function sub($a,$b){
		$c = $a - $b;
		return $c;
	}

	echo '<br>Sub result =>'.sub(55,3);
?>

<p>------------------------------------------------------</p>

<?php 
	function myAddition($a, $b) : int {
		$c = $a + $b; // 4.58+4.58 = 9.16
		return $c;
	}
	function myAddition2( int $a, int $b) {
		$c = $a + $b; // 4+4
		return $c;
	}

	echo '<br>myAddition => '.  myAddition(4.58, 4.58); // 9
	echo '<br>myAddition => '.  myAddition(4.42, 4.58); 
	echo '<br>myAddition2 => '.  myAddition2(4.58, 4.58); // 8

	echo '<br>round => '.round('4.12');
	echo '<br>round => '.round('4.56');
?>

<?php 
	function myArray($array){
		$sum = $array[0] +  $array[1] +  $array[2] +  $array[3] +  $array[4];
		return $sum;
	}

	$array = [22,33,4,55,6];
	echo "<br>Array Sum => " .myArray($array);


	function myArrayWithLoop($array){
		$sum = 0;
		foreach ($array as $value) {
			//$sum = $sum + $value;
			$sum += $value;
		}
		return $sum;
	}

	$array = [22,33,4,55,6];
	echo "<br>myArrayWithLoop Sum => " .myArrayWithLoop($array);
?>

%, squre, swaping of 2 number, chk number is prime or not, 
