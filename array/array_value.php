<?php

$arr = [
    'name' =>'shah',
    'description' =>'shah',
    'email' =>'shah@gmail.com',
    'phone' => 0120,
    'address' => '123 Main Street'
];


echo "<pre>"; 

print_r($newA = array_values($arr));
print_r(array_keys($arr));
print_r(array_unique($newA));

echo"</pre>";