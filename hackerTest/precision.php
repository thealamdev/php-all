<?php

$arr = [
    -4, 3, -9, 0, 4, 1
];

$positive = [];
$negetive = [];
$null = [];
$ar_size = count($arr);

foreach ($arr as $a) {
    if ($a > 0) {
        array_push($positive, $a);
        $positive_count = count($positive);
    } elseif ($a < 0) {
        array_push($negetive, $a);
        $negetive_count = count($negetive);
         
    } else {
        array_push($null, $a);
        $null_count = count($null);
    }
}

$x = ($positive_count / $ar_size);
$y = ($negetive_count / $ar_size);
$z = ($null_count / $ar_size);

return $output = [
    number_format($x, 6),
    number_format($z, 6),
    number_format($y, 6)
];
