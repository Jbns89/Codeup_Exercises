<?php
	for ($some_num = 1; $some_num <= 100; $some_num++) 
	{
    	if ($some_num%3==0&&$some_num%5==0) 
    	{
    		echo "FizzBuzz\n";
    	}
    	elseif ($some_num%3==0) 
    	{
    		echo "Fizz\n";
    	}
    	elseif ($some_num%5==0) 
    	{
    		echo "Buzz\n";
    	}
    	else
    	{
    		echo "$some_num\n";
    	}
	}