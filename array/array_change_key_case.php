<?php

$array = [
    'name' => 'shah alam',
    'aGe' => 23,
    'dep' => 'cse',
];

echo "<pre>";
print_r(array_change_key_case($array,CASE_LOWER));
echo"</pre>";