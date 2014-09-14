<?php

for ($i = 1; $i <= 100; $i++) 
{
    if ($i % 2 != 0) 
    {
        continue;
    }
    echo "\n $i \n\n";
}

for ($i = 1; $i <= 100; $i++) 
{
    echo $i . "\n";
    if ($i == 10) 
    {
        break;
    }
}
