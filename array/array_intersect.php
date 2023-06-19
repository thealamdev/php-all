<?php

$array1 = [
    'name' => 'Shah Alam',
    'age' => 45,
    'description' => 'this is shah Alam',

];
$array2 =[
    'name' => 'Shah Alam',
    'ag' => 45,
    'description' => 'This is Mehedi Hasan',
];

$array3 = [
    'name' => 'Shah Alam',
    'age' => 34,
    'dep' => 'cse',
];

echo "<pre>"; 
 print_r($newArray = array_intersect($array1,$array2,$array3));
 print_r($newArray = array_intersect_assoc($array1,$array2,$array3));

echo"</pre>";

// array intersection give the common match of arrays value. not key.