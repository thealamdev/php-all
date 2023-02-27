<?php

function myFunction(&$string){
    $string .= " everyone";
}


$string = "Hello";
myFunction($string);
echo $string;