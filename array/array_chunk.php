<?php

$arr = [
    'name' => 'SHAH ALAM',
    'age' => 21,
    'department' => 'cse',
    'email' => 'shahal@gmail.com',
    'phone' => 378,
];


 
$new = array_chunk($arr,3,true);

echo "<pre>";
print_r($new);
echo"</pre>";