<?php

$array = [
    'name' => 'shah alam',
    'aGe' => 23,
    'dep' => 'cse',
];

$array2 =[
    'address' => 'Dhaka',
    'zip' => 1800
];

$array3 = array_merge($array,$array2); // must be two array parameter will be array:
echo "<pre>";
   print_r(array_change_key_case($array,CASE_LOWER));
   print_r($array3);
echo"</pre>";