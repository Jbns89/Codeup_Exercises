<?php

// Create a function the returns the area of a circle: area_of_circle().
// Now create a function that returns the area of a donut; use your previous function to figure this out.
// The radius of the donut is 15 and the radius of its hole is 5.
function area_of_circle($radius)
{
    $radius *= $radius;
    $area = pi() * $radius;
    return $area;
}

function donut($radi1, $radi2)
{
    $total_area = $radi1 - $radi2;
    return $total_area;
}

$radi1 = area_of_circle(15);
$radi2 = area_of_circle(5);
echo donut($radi1,$radi2);
