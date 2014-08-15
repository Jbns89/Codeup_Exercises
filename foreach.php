<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $data) 
{
    if (is_int($data)) 
    {
        echo "{$data} is an integer\n";
    } 
    else if (is_float($data)) 
    {
        echo "{$data} is a float\n";
    }
    else if (is_string($data)) 
    {
        echo "{$data} is a string\n";
    }
    else if (is_bool($data)) 
    {
        echo "{$data} is a boolean\n";
    }
    else if (is_array($data)) 
    {
        echo "{$data} is an array\n";
    }
}