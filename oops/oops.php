<h1>OOPS</h1>
<p>1) Class</p>
<p>2) Object</p>
<p>3) Inheritance</p>
<p>4) Interface</p>
<p>5) Abstraction</p>
<p>6) Incapsulation</p>
<p>7) Polimorphism</p>
<p>8) constructer & destructer</p>

<h2>Class</h2>
<?php 

class maths{
	
	function __construct(){
		echo "this is construction function<br>";
	}

	function __destruct(){
		echo "this is __destruct function<br>";	
	}

	function sum($a,$b){
		echo "total of 2 number =>".$a+$b." <br>";
	}
	
	function sub($a,$b){
		return $a-$b;
	}
}

class parking{
	function sum(){
		echo "<br>This is parking sum function <br>";
	}

	function fourWheeler(){
		echo "<br>This is sum function <br>";
	}

	function twoWheeler(){
		echo "<br>This is subtract suncton <br>";
	}
}

$obj = new maths();
//$obj2 = new maths();
$obj->sum(4,6);
$obj->sum(14,6);
$obj->sum(4,63);
$obj->sum(4,61);
//$obj2->sum(14,16);

echo $obj->sub(4,6);


$parkingObj = new parking();
$parkingObj->sum();



?>



