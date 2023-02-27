<?php

function sum($num1, $num2, $num3) {
    $sum = $num1 + $num2 + $num3;
    $arg = func_num_args();
    $arr = [
        'sum' => $sum,
        'arg' => $arg
    ];
    return $arr;
}

function average($total, $num_args) {
    $average = $total / $num_args;
    return $average;
}

$total = sum(55, 60, 80);
// print_r($total);
$per = average($total['sum'], $total['arg']);
echo $per . "%";
