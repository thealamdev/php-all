<?php

$arr = [
    [
        'name' => 'shah',
        'id' => 21,
        'dep' => 'cse',
    ],
    [
        'name' => 'shah alam',
        'id' => 25,
        'dep' => 'cse',
    ],
    [
        'name' => 'alam',
        'id' => 70,
        'dep' => 'cse',
    ]

];

echo "<pre>";  
 print_r(array_column($arr,'name','id'));

 echo"</pre>";