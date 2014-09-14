<?php

$nothing = NULL;
$something = ' ';
$array = [1,2,3];

function no_set($a)
{
    if (isset($a)) 
    {
        return 'Variable is set' . PHP_EOL;
    }
    else
    {
        return 'Variable is unset' . PHP_EOL;
    }
}

function emptiness($a)
{
    if (empty($a)) 
    {   
        return 'Variable is empty' . PHP_EOL;
    }
    else
    {
        return 'Variable is full' . PHP_EOL;
    }   
}

function cerealize($a)
{
    return serialize($a);
}

function uncerealized($a)
{
    return unserialize($a);
}
echo no_set($nothing);
echo no_set($something);
echo emptiness($nothing);
$cereal = cerealize($array);
var_dump(cerealize($array));
var_dump(uncerealized($cereal));
