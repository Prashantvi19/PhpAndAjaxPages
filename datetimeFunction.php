<h1>Date Time Function</h1>
<?php 
	echo 'Time => '. time();
	echo '<br> Date => '. date('Y-m-d');	// 2023-02-16 
	echo '<br> Date => '. date('d-m-Y');	// 16-02-2023 
	echo '<br> Date => '. date('d-m-y');	// 16-02-2023 
	echo '<br> Y => '. date('Y');	// 2023
	echo '<br> d => '. date('d');	// 16
	echo '<br> Date => '. date('d-M-y');	// 16-02-2023 
	echo '<br> Date => '. date('D-M-y');	// 16-02-2023 
	echo '<br> Date => '. date('D-M');	// Thu-Feb 
	echo '<br> Date => '. date('D,M');	// Thu,Feb
	echo '<br> Date => '. date('D M');	// Thu Feb 
	echo '<br> Date => '. date('D/M/Y');	// Thu/Feb/2023 
	echo '<br> Date => '. date('F');	// Thu/Feb/2023 
	echo '<br> Date => '. date('d-F-y');
	echo '<br> Date => '. date('l-F-y'); //  Thursday-February-23
	echo '<br> Date => '. date('d l'); //  Thursday-February-23

	echo '<br>2002/08/19<br>';
	$date = '2002/08/19';
	echo "sorttotime => " . date('d m Y', strtotime($date));

?>
<h2>Time function</h2>
<?php 
	date_default_timezone_set('Asia/Calcutta');
	echo 'Time => '. time(); // 1676524070
	echo '<br>Time => '. date('H:i:s'); // 10:37:50
	echo '<br>Time => '. date('H:i:s');
	echo '<br>Time => '. date('H:i:s a'); // 10:37:50 am
	echo '<br>Time => '. date('H:i:s A'); // 10:37:50 AM
	echo '<br>Time => '. date('D M Y H:i:s A'); // Thu Feb 2023 10:37:50 AM
?>