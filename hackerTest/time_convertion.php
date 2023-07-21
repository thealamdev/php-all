<?php
 

 
 $s = date_create('12:01:00AM');
    $converted_time = date_format($s,'H:i:s');
    echo $converted_time;