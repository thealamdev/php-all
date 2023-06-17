<?php

$array = [
    [1,2,3,4,5,6,6],
    [1,2,3,4,5,6,6],
    [1,2,3,4,5,6,6],
    [1,2,3,4,5,6,6],
    [1,2,3,4,5,6,6],
    [1,2,3,4,5,6,6],
    [1,2,3,4,5,6,6],
    [1,2,3,4,5,6,6]
];

$result = [
    1,2,3,2,6,1,1
];

echo count($array,true);
echo "<br>";
echo sizeof($array);

echo "<pre>";
print_r(array_count_values($result));
echo "</pre>";

// array_count_values help us to find the repeted value of a array: