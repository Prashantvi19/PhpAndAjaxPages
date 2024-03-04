<h1>Json/Array</h1>
<?php 
$array['users']= [
			[
			'name'=>'ram',
			'email' => 'ram@gmail.com'
			],
			[
				'name' => 'shyam',
				'email' => 'shyam@gmail.com'
			]
		];

echo "<pre>";
print_r($array);
echo "<br>";
print_r(json_encode($array));

$jsonval = '{"users":[{"name":"mohan","email":"mohan@gmail.com"},{"name":"manoj","email":"manoj@gmail.com"}]}';

echo "<br>".$jsonval.'<br>';

print_r(json_decode($jsonval));

?>