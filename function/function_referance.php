<?php

function sum($a, &$b){ // value and address:
     $a = 100;
     $b = 200;
    echo $a + $b . "<br>";
}


// calling or invock the function:
$num1 = 10;
$num2 = 20;
sum($num1,$num2);

echo $num1 . "<br>";
echo $num2;


