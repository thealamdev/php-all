<?php

/* array slice means cut off a part of array and create a new array
it has 3 combolcary parameter and one optional parameter.
array_slice(array, start, length, preserve key); preserve key take two value(true,false).
if we given true it will take main array key other wise it will take new key
*/

$array = [
    'mehedi',
    'papiya',
    'mejo' => 'sajjat',
    'big' => 'shah alam',
     45 =>'papiya',
];


$newArray = array_slice($array,2,3);

echo "<pre>";
print_r($newArray);
echo "</pre>";