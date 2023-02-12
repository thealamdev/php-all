<?php

// Generally we print output by echo: it show output in browser generally:
echo("Hello world \n");
echo "Hello world"."\n";
echo "Hello world\n";

/*  
print_r as output: it use for print output. it also print array details.We can cotrol array item through index number of array.
*/
$a = [2,3,4,5];
print_r($a);
print_r($a[3]."\n");


/* Var_damp use for show output. it has special features. It shows array and total number of array. it also print data type. and 
total charecter for string. */

$num = "SHAH ALAM";
var_dump($num ."\n" );
var_dump($a);

//printf use for print output. Its syntax same to like c programming. here we use placeholder. 
$x = 10;
$y = 20;

printf("The two number is %d %d", $x, $y);
