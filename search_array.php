 <?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
 function tf_search($person)
 {
 	if ($person===0) 
 	{
 		return 'True'; 
  	}
  	if ($person>0) 
  	{
  		return 'True';
  	}
  	else
  	{
  		return 'False';
  	}
 }
 $result_t=array_search('Tina', $names);
 echo tf_search($result_t).PHP_EOL;
 $result_b=array_search('Bob', $names);
 echo tf_search($result_b).PHP_EOL;