<?php

$array = [
    'name' => 'shah alam',
    'aGe' => 23,
    'dep' => 'cse',
];

$array2 =[
     1,2
];

$array3 = array_merge_recursive($array,$array2); // must be two array parameter will be array:

echo "<pre>";
   print_r(array_change_key_case($array,CASE_LOWER));
   print_r($array3);
echo"</pre>";
?>