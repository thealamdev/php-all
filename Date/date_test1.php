<?php


// print todays date:

echo date('d-m-Y');
echo date('l');
echo date('D'); 
echo date('z');  
echo date('W') . "<br>";  

$date2 =  gmmktime('9', '6','45','6','3','2020') ;
echo date('d-m-Y h:i:s a',$date2). "<br>";
// CREATE TIME:
date_default_timezone_set('Asia/Dhaka');
echo "time is " . date('h-i-s a e'). "<br>";

// Old date create:

$date =  mktime('9', '6','45','6','3','2020') ;
$date2 =  gmmktime('9', '6','45','6','3','2020') ;
echo date('d-m-Y h:i:s a',$date). "<br>";
echo date('d-m-Y h:i:s a',$date2). "<br>";

// CREATE DATE:

$TIME = date_create('2023-5-15 2:12:13',timezone_open('Asia/Dhaka'));

echo date_format($TIME, 'd-F-Y H:i:s a');