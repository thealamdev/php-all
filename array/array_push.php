<?php

$array = [
    'apple',
    'pototo',
    'mango'
];

($arr = array_push($array, "cucumber"));
array_pop($array);
echo "<pre>";
  print_r($array);
echo"</pre>";

// array_push and pop change the existing array. they modified the main array. ( NOTED IT )