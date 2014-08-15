<?php
// $things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
// foreach ($things as $data) 
// {
//     if (is_int($data)) 
//     {
//         echo "{$data} \n";
//     } 
//     else if (is_float($data)) 
//     {
//         echo "{$data} \n";
//     }
//     else if (is_bool($data)) 
//     {
//         echo "{$data}\n";
//     }
//     else if (is_array($data)) 
//     {
//         echo "Array\n";
//     }
//     else if (is_null($data)) 
//     {
//         echo "{$data} \n";
//     }
//     else if (is_string($data)) 
//     {
//         echo "{$data} \n";
//     }   
    
// }




$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach ($things as $data) 
{
    if (is_scalar($data)) 
    {
        echo "{$data} \n";
    }        
    
}