<?php

echo "Please input a month:\n(i.e January, June, December)" . PHP_EOL;
$month = trim(fgets(STDIN));
echo "Please input a year:" . PHP_EOL;
$year = trim(fgets(STDIN));

function days_of_month($month, $year)
{
    $month_num = date("m", strtotime($month));
    $days = cal_days_in_month(CAL_GREGORIAN, $month_num, $year); // 31
    return "In $year, $month had $days days in it." . PHP_EOL;
}

echo days_of_month($month, $year) . PHP_EOL;
