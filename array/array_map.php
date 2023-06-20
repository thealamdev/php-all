<?php

$array = [
    10,23,4,5,3,67,55
];


function square($value){
    return $value*$value;
}


$newArray = array_map('square', $array);

echo "<pre>";
print_r($newArray);
echo "</pre>";