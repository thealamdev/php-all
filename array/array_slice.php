<?php

/* array slice means cut off a part of array and create a new array
it has 3 combolcary parameter and one optional parameter.
array_slice(array, start, length, preserve key); preserve key take two value(true,false).
if we given true it will take main array key other wise it will take new key
*/



/*  
array_splice() it work for deleting some value form anywhere.
Note: array_push() : it work for enter any value in the last.
array_pop() : it work for delete any value in the last.
array_shift() : it work for delete value form first.
array_unshift() : it work for insert value into first.
array_slice() : it will cut a portion of an array.
array_splice() : it will delete a value or more value form any where.
*/


$array = [
    'mehedi',
    'papiya',
    'mejo' => 'sajjat',
    'big' => 'shah alam',
     45 =>'papiya',
];
// array_pop($array);
// print_r($array);
$newArray = array_slice($array,2,3);
array_splice($array,1);

echo "<pre>";
print_r($newArray);
print_r($array);
echo "</pre>";