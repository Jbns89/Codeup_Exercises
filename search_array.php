 <?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
 function tf_search($person)
 {
    if ($person === 0 || $person > 0) //you can also use $person === false \n return false
    {
        return 'True'; 
    }
    else
    {
        return 'False';
    }
 }
 function multi_array_search($array1,$array2)
 {
    $num_names = 0;
    foreach ($array1 as $key => $name) 
    { 
        $search = array_search($name, $array2);

        if (is_numeric($search)) 
        {
            $num_names++;
        }
    }
    return $num_names;
 }
 $result_t = array_search('Tina', $names);
 echo tf_search($result_t) . PHP_EOL;
 $result_b = array_search('Bob', $names);
 echo tf_search($result_b) . PHP_EOL;
 echo 'They have ' . multi_array_search($names,$compare) . ' names in common.';
