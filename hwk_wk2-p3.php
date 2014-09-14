<?php

$cars = array(
    array(
        'name' => 'Toyota Solara',
        'year' => 2001,
        'doors' => 2,
        'color' => 'gray',
        'mileage' => 100000,
        'sunroof' => true,
        'convertable' => false,
        'license' => 'JSRULZ',
    ),
    array(
        'name' => 'Honda Odyssey',
        'year' => 2004, 
        'doors' => 4,
        'color' => 'marron',
        'mileage' => 60000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'ILUVPHP',
    ),
    array(
        'name' => 'Cadillac Escalade',
        'year' => 2014,
        'doors' => 4,
        'color' => 'white',
        'mileage' => 5000,
        'sunroof' => false,
        'convertable' => false,
        'license' => 'HTML5',
    ),
);

function list_cars($cars)
{
    foreach ($cars as $key => $detail) 
    {
       // $detail['sunroof']==(true)?'yes':'N/A';
       if ($detail['sunroof'] == 0) 
       {
           $detail['sunroof'] = 'N/A';
       }
       else  
       {
           $detail['sunroof'] = 'Yes';
       }
       if ($detail['convertable'] == 0) 
       {
           $detail['convertable'] = 'N/A';
       }
       else 
       {
           $detail['convertable'] = 'Yes';
       }
       return "I own a {$detail['year']} {$detail['name']}. Details below: \n<^><^><^><^><^><^><^><^><^>\n{$detail['doors']} door {$detail['year']} {$detail['name']}\nColor: {$detail['color']}\nMileage: {$detail['mileage']}\nSunroof: {$detail['sunroof']}\nConvertable: {$detail['convertable']}\nLicense NO: {$detail['license']}\n";
    }
}
 echo list_cars($cars);


// I own a 2014 Cadillac Escalade. Details below:
// ------------------------------------------------
// 4 Door 2014 Cadillac Escalade
// Color: white
// Milelage: 5000
// Sunroof: N/A
// Convertable: N/A
// Lincense NO: HTML5


