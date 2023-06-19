<?php

$array1 = [
    'name' => 'shah alam',
    'age' => '43',
    'dep' => 'cse',
    'data'=> 'important'
];

$array2 =[
    'name' => 'shah alam',
    'ssc' => 'tilli',
    'dep'=> 'science'
];


$new = array_diff($array1, $array2);


echo "<pre>"; 
 print_r($new);
 print_r(array_diff_key($array1, $array2));
 print_r(array_diff_assoc($array1, $array2));

echo"</pre>";