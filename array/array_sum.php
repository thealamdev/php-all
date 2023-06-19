<?php

$array = [
    [
        'name' => 'Shah Alam',
        'age' => 23,
        'salary' => 20000
    ],
    [
        'name' => 'Shah Alam',
        'age' => 23,
        'salary' => 20000
    ],
    [
        'name' => 'Shah Alam',
        'age' => 23,
        'salary' => 20000
    ]
];

$sum = 0;
foreach ($array as $a) {
    $sum += $a['salary'];
}

echo $sum . "<br>";
($new = array_column($array, 'salary'));
print_r(array_sum($new)) . "<br>";
echo "<pre>";
 
 
print_r(array_product($new));
echo "</pre>";
