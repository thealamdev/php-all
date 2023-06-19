<?php

$array1 = [
    'name' => 'Shah Alam',
    'age' => 45,
    'description' => 'this is shah Alam',

];
$array2 =[
    'name' => 'Shah Alam',
    'age' => 45,
    'description' => 'This is Mehedi Hasan',
];

$array3 = [
    'name' => 'Shah Alam',
    'age' => 55,
    'dep' => 'cse',
];

echo "<pre>"; 
 print_r($newArray = array_intersect($array1,$array2,$array3));
 print_r($newArray = array_intersect_assoc($array1,$array2,$array3));
 print_r($newArray = array_intersect_key($array1,$array2,$array3));
 print_r($newArray = array_key_exists('age',$array2));

echo"</pre>";

// array intersection give the common match of arrays value. not key.