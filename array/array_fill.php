<?php

$array = [
    'a','b','c'
];

$newArray = array_fill_keys($array, 'blue');

echo "<pre>";
 print_r($newArray);
 print_r(array_fill(0,5,'black'));
 print_r(array_flip($newArray));
echo "</pre>";