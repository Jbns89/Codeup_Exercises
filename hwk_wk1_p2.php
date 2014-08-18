<?php
// <!-- 2) hw_wk1_p2.php

// Create an array that represents a quiz. In the top level array, 
//the keys should be the question numbers and the values should be an 
//associative array. The associative array should have the following 
//keys: 'question', 'answers', 'correct_answer'. The 'question' is a 
//string. The 'answers' is as associative array with alphabetical keys 
//and string values. The 'correct_answer' is a string representing the 
//letter of the correct answer. Make sure your quiz has at least 3 
//questions.

// Loop through the array and produces the following output:

// 1. Question goes here.

//    a. Answer one.
//    b. Answer two.
//   *c. Answer three. (Star before answer denotes that it is correct)
//    d. Answer four.

// ... -->

$test=[

		[	'question'=> 'What is the answer to life?',
			'answers'=>['a'=> 'Happiness', 'b' => 'Money', 'c' => 42, 'd'=> 36],
			'correct_answer'=>'c'
		],
		[	'question'=> 'Finish the quote: Life, liberty, and the pursuit of...',
			'answers'=>['a'=> 'Money', 'b' => 'Happiness', 'c' => 'Food', 'd'=> 'Kittens'],
			'correct_answer'=>'b'
		],
		[	'question'=> 'What is the air-speed velocity of an unladen swallow?',
			'answers'=>['a'=> 'An African or European swallow?', 'b' => '112', 'c' => 42, 'd'=> 36],
			'correct_answer'=>'a'
		],
	];

foreach ($test as $q_num => $questions) 
{
	echo $questions['question'];
}
// foreach($people as $person => $names)
// {
	
// 	echo "\n $position. " . $names['name']['first'] . " " . $names['name']['last']; 
// 	echo "\n    Phone: " . $names['phone_number'];
// 	echo "\n    Address: " . $names['address'] . "\n";
// 	$position++; 

//}
