<?php

$array = [
    'name' => 'Shah alam',
    'mark' => 39,
    'age' => 23,
    'dep' => 'cse',
    'address' => 'Dhaka',
];


echo "<pre>";
print_r($array);
echo "</pre>";

// search array index or key by array_search() function:

echo array_search('Shah alam', $array, true);
echo "<br>";
// search an value in array and if find then give ture(1) and if not find then give false(0);

echo in_array(39, $array, true);
echo "<br>";
if (in_array('Shah alam', $array)) {
    echo "Find the result";
} else {
    echo "Can't find";
}

// we can strict mood in in_array(). it means if we use strict mood then we need to pass one extra parameter and the data type also be need to match.
