<?php


$people=
[
	[
		'name' => ['first' => 'Mike', 'last' => 'Limon'],
		'phone_number' => '123-123-1234', 
		'address' => '123 Somewhere Dr. SA, TX 12345'],
	[
		'name' => ['first' => 'Angela', 'last' => 'Garza'],
		'phone_number'=> '123-123-1235', 
		'address' => '125 Somewhere Dr. SA, TX 12345'],
	[
		'name' => ['first' => 'Cy', 'last' => 'Thigpen'],
		'phone_number' => '123-123-1236', 
		'address' => '127 Somewhere Dr. SA, TX 12345']
	
];



 
foreach($people as $person => $names)
{
	$person++;
	
	echo "\n" . $person."   ". $names['name']['last'] . ", " . $names['name']['first']; 
	echo "\n    Phone: " . $names['phone_number'];
	echo "\n    Address: " . $names['address'] . "\n";
	

}
