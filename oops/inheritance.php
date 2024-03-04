<h1>Inheritance</h1>
<p>Single</p>
<p>Multiple</p>
<p>Multilevel</p>
<p>Hirerchie</p>


<h2>Single Inheritance</h2>
<?php 
	class a{  // class

	}

	class b{

	}

	interface c{ // interface
		function add();
		function sub($a,$b);
	}

	interface z extends c{ // interface

	}

	class d extends a{

	}

	class d extends b{

	}

	class d implements c{

	}

// ------------------------------------------

	abstract class a{
		public function dbname(){
			return "mydbname";
		}
		abstract public function add();
		abstract public function sub($a,$b);
		public function multi($a,$b){
			return $a*$b;
		}
	}

	class math extends a{
		abstract public function add();
		public function sub(5,10){
			echo $c = $a+$b;;
		}
	}

	class xyx extends a{
		
	}
?>