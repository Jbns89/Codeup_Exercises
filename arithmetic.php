<?php
function numeric_error($value1, $value2) 
{
		echo "Error! You must use numbers".PHP_EOL;			
}
function zero_error($value1) 
{
		echo "Error! You can't divide by zero".PHP_EOL;	
}

function add($a, $b)
{
	if (is_numeric($a)&& is_numeric($b)) 
	{
		echo $a + $b.PHP_EOL;
	}	
	else
	{
		echo numeric_error($a,$b).PHP_EOL;
	}
}
function subt($a, $b)
{
	if (is_numeric($a)&& is_numeric($b)) 
	{
		echo $a - $b.PHP_EOL;
	}	
	else
	{
		echo numeric_error($a,$b).PHP_EOL;
	}	
}
function multi($a, $b)
{
	if (is_numeric($a)&& is_numeric($b)) 
	{
		echo $a * $b.PHP_EOL;
	}	
	else
	{
		echo numeric_error($a,$b).PHP_EOL;
	}
}
function div($a, $b)
{
	if (is_numeric($a)&& is_numeric($b)) 
	{
		
		if ($b==0) 
		{
			zero_error($b);
		}
		else
		{
			echo $a / $b.PHP_EOL;
		}
	}	
	else
	{
		echo numeric_error($a,$b).PHP_EOL;
	}	
	
}
function remain($a, $b)
{
	if (is_numeric($a)&& is_numeric($b)) 
	{
		
		if ($b==0) 
		{
			zero_error($b);
		}
		else
		{
			echo $a % $b.PHP_EOL;
		}
	}	
	else
	{
		echo numeric_error($a,$b), PHP_EOL;
	}

}


$num1=15;
$num2=0;
echo add($num1, $num2), PHP_EOL;
echo subt($num1,$num2), PHP_EOL;
echo multi($num1,$num2), PHP_EOL;
echo div($num1,$num2), PHP_EOL;
echo remain($num1,$num2), PHP_EOL;
