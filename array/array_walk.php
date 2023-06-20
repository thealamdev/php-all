<?php

$array = [
    [
        'name' => 'SHAH ALAM',
        'value' => 21,
        'age' => 34,
        'dep' =>  [
            'name' => 'SHAH ALAM',
            'value' => 21,
            'age' => 34,
        ]
    ],

    [
        'name' => 'SHAH KOTO',
        'value' => 21,
        'age' => 34,
        'dep' => 'cse'
    ],


];

$arr = [];

function myFun(&$value, $key)
{
    global $arr;  // Add this line to access $arr within the function
    array_push($arr, $value);  // Use $arr instead of $array
}

array_walk_recursive($array, "myFun");

echo "<pre>";
print_r($arr);  // Output the modified $arr array


echo "</pre>";
