<?php


$array = [
    'name' => [
        'name' => 'Shah alam',
        'mark' => 56,
        'dep' => 'cse'
             ],
    'not' => 22,
    'option' => 'no'
];

$array2 = [
    'name' => 'Sajjat',
    'class' => 90,
    'option' => 12,
];


echo "<pre>"; 
print_r($newArray = array_replace($array,$array2));  
echo "</pre>";