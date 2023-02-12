<?php

define("PI","3.1416");
echo(PI ."\r"."\rHI THIS IS SHAHALAM \$");
echo(PI ."\n" );


// rules of print output in php:
$a = "shah alam";
$b = "we are going there";
$c = "I AM THE BEST";

// echo(strtoupper($a));
echo("$a\n");
echo("The lower cse is " . strtoupper($a). "\n");
print("The supper case of a is ". strtolower($c). "\n");
var_dump(strtoupper($b));
print_r(strtolower($c)."\n");

// some build funtion :
echo("The length of c variable is " . strlen($c)."\n");
echo("The reverse sentense of this variable "  . strrev($c) . "\n");
echo(str_word_count($c)."\n");
echo(strpos("$c","BEST")."\n");
var_dump((str_replace("there","home","$b"))); 

// php constant:
define("age", [21,12,32]);
var_dump(age[1] ."\n");