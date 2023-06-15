<?php

 

function name() {
   global $n; // Use the global keyword to access the global variable
   $n = 10;
}

name();
echo $n; // Output: 10
