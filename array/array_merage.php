<?php

/* array merge: we can merge array by three way 
i. array_merge() : it can merge index array and associative array. if there is any common key it will replace and then merge.
ii. array_merge_recursive() : it basically use in multidimentional associtaive array.
iii. array_combine() : it can merge indexing array.

we will learn about them and solve problem.
*/


$fruits = [
    'a' => 'apple',
    'b' => 'bannana',
    'c' => 'carrots',
];

$color = [
    'r' => 'red',
    'b' => 'blue',
    'g' => 'green'
];


$fruits2 = [
    'a' => 'apple',
    'b' => 'bannana',
    'c' => 'carrots',
];

$color2 = [
    'r' => 'red',
    'd' => 'blue',
    'g' => 'green'
];

// 3rd array:
$fruits3 = [
    'a' => 'apple',
    'b' => 'bannana',
    'c' => 'carrots',
];

$color3 = [
    'r' => 'red',
    'b' => ['color' => 'red',
    'key' => 'green'            
],
    'g' => 'green'
];

$newArray = array_merge($fruits, $color); // this is for array_merge
$newArray2 = array_merge($fruits2, $color2);
$newArray3 = array_merge_recursive($fruits3, $color3);

echo "<pre>";
    print_r($newArray); // here it replace $fruits 'b'=> 'bannana' and set $color 'b' => 'blue' .
    print_r($newArray2);  // here is not common key between two array.
    print_r($newArray3);  // here is not common key between two array.

    // if we want that we would not replace 2nd array key by 1st array. then we can just concatinate two array.
    // print_r($fruits + $color);
echo"</pre>";
