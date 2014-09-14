<?php

echo "--------Exercise 2--------\n";

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $data) 
{
    if (is_int($data)) 
    {
        echo "{$data} \n";
    } 
    else if (is_float($data)) 
    {
        echo "{$data} \n";
    }
    else if (is_bool($data)) 
    {
        echo "{$data} \n";
    }
    else if (is_array($data)) 
    {
        echo "Array\n";
    }
    else if (is_null($data)) 
    {
        echo "{$data} \n";
    }
    else if (is_string($data)) 
    {
        echo "{$data} \n";
    }   
    
}

for ($i = 0; $i < 4; $i++) 
{ 
    echo "\n";
}

echo "--------Exercise 3--------\n";

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $data) 
{
    if (is_scalar($data)) 
    {
        echo "{$data} \n";
    }        
    
}
    
for ($i = 0; $i < 4; $i++) 
{ 
    echo "\n";
}
        
echo "--------Exercise 4--------\n";

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $data) 
{
    if (is_int($data)) 
    {
        echo "{$data} \n";
    } 
    else if (is_float($data)) 
    {
        echo "{$data} \n";
    }
    else if (is_bool($data)) 
    {
        echo "{$data} \n";
    }
    else if (is_array($data)) 
    {
        print_r($data);
    }
    else if (is_null($data)) 
    {
        echo "{$data} \n";
    }
    else if (is_string($data)) 
    {
        echo "{$data} \n";
    }   
    
}
