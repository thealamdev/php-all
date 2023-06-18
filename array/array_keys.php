<?php


$array = [
    'name' => [
        'name' => 'Shah alam',
        'mark' => 56,
        'dep' => 'cse'
             ],
    'not' => 22,
    'option' => 'no'
];

$new = array_keys($array);
$new = array_key_exists('dep', $array['name']);

echo "<pre>";
print_r($new);
echo "</pre>";