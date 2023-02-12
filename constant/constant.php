<?php
define('TEST',50);
$first = 50;
echo TEST+$first;

if(TEST <> $first){
    echo "this is not equal";
}else{
   echo "this is equal";
}

function myFun(){
    global $first;
    echo "this is number " . $first . "<br>";
}

myFun();


echo "this" , "is","shahalam" . "<br>";
print("this " . "is");
print "<h2>".$first. "</h2>"
?>