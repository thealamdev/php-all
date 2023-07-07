<?php

echo "<pre>";
 
    echo date('Y-m-d');
    echo "<br>";
    echo date('Y-m-d',strtotime('5 march 2098'));
    echo "<br>";
    echo date('Y-m-d h:i',strtotime('+5 days'));
    echo "<br>";
    echo date('Y-m-d h:i',strtotime('last year'));
echo"</pre>";