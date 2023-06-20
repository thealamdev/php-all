<?php


/* in this tutorial we will learn about php date function and it's working principal: */


// THIS IS FOR DAYS:
echo "d = ". date('d') . "<br>";
echo 'j =' . date('j') . "<br>";
echo 'S =' . date('S') . "<br>";

// THIS IS FOR MONTH:
echo 'm =' . date('m') . "<br>";
echo 'M =' . date('M') . "<br>";
echo 'n =' . date('n') . "<br>";
echo 'F =' . date('F') . "<br>";

// THIS IS FOR YEAR:
echo 'y =' . date('y') . "<br>";
echo 'Y =' . date('Y') . "<br>";

// THIS IS FOR WEEK:
echo 'w =' . date('w') . "<br>"; 
echo 'N =' . date('N') . "<br>"; 
echo 'D =' . date('D') . "<br>"; 
echo 'l =' . date('l') . "<br>"; 

// how many days of year:

echo "Days is ". date('z'). "<br>";
echo "Week of the year is ". date('W'). "<br>";
echo "days of the month ". date('t'). "<br>";
echo "Time zone". date('T'). "<br>";
echo "leap year or not". date('L'). "<br>";



