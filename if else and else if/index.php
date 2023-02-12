<?php

// write a php program to create a gratting system:

//user input:
$std_number = 120;


if($std_number>=80 && $std_number<=100){
    echo("You got A+");
}
elseif($std_number>=70 && $std_number<=79){
    echo("You got A");
}
elseif($std_number>=60  && $std_number<=69){
    echo("You got A-");
}
elseif($std_number>=50  && $std_number<=59){
    echo("You got B");
}
elseif($std_number>=40  && $std_number<=49){
    echo("You got C");
}

elseif($std_number>=33  && $std_number<=39){
    echo("You got D");
}

elseif($std_number>0 && $std_number<33){
    echo("You are fail. Try again. Thank you.");
}
else{
    echo("Sorry the number is invalid");
}
