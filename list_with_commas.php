<?php
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// $physicists_array=explode(', ', $physicists_string);
// $and = array_pop($physicists_array);
// $famous_fake_physicists = implode(', ',$physicists_array);
// echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists} and {$and}." . PHP_EOL;
function humanized_list($string,$abet = 'N')
{
	$array=explode(', ', $string);
	if (ucfirst($abet)=='Y') 
	{
		sort($array);
	}

	$and = array_pop($array);
	$fake_physicists = implode(', ',$array);
	return "Some of the most famous fictional theoretical physicists are {$fake_physicists} and {$and}." . PHP_EOL;
}
echo "Do you want to alphabetize your physicists? \n (Y)es or (N)o" . PHP_EOL;
$input = trim(fgets(STDIN));
$famous_fake_physicists=humanized_list($physicists_string, $input);
echo $famous_fake_physicists;


