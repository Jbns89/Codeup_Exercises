<?php

$test = [
    [   'question'=> 'What is the answer to life?',
        'answers'=>['a'=> 'Happiness', 'b' => 'Money', 'c' => 42, 'd'=> 36],
        'correct_answer'=>'c'
    ],
    [   'question'=> 'Finish the quote: Life, liberty, and the pursuit of...',
        'answers'=>['a'=> 'Money', 'b' => 'Happiness', 'c' => 'Food', 'd'=> 'Kittens'],
        'correct_answer'=>'b'
    ],
    [   'question'=> 'What is the air-speed velocity of an unladen swallow?',
        'answers'=>['a'=> 'An African or European swallow?', 'b' => '112', 'c' => 42, 'd'=> 36],
        'correct_answer'=>'a'
    ],
];
  
$position = 1;

foreach ($test as $q_num => $questions) 
{
    if ($questions['answers']=$questions['correct_answer']) 
    {
        echo " * " . $questions['correct_answer'] . "\n";
    }
    else
    {
        echo "\n$position.   " . $questions['question']. "\n";
        echo  "\ta." . $questions['answers']['a']. "\n\tb." . $questions['answers']['b'] . "\n\tc." . $questions['answers']['c'] . "\n\td." . $questions['answers']['d'] . "\n";
        $position++;
    }
}

