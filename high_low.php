<? php
// 	game picks a random number between 1 and 100.
// prompts user to guess the number
// if user's guess is less than the number, it outputs "HIGHER"
// if user's guess is more than the number, it outputs "LOWER"
// if a user guesses the number, the game should declare "GOOD GUESS!"

	$random_number=mt_rand(1,100);
	fwrite(STDOUT, 'What is your guess? \n')
	$guess=trim((STDIN));
	if ($random_number>$guess) 
		{
			echo "\nLower\n";
		}
	elseif ($random_number<$guess) 
		{
			echo "\nHigher\n";
		}
	elseif ($random_number==$guess) 
		{
			echo "\nGood Guess!\n";	
		}
	else
		{
			echo "ERROR"
		}
