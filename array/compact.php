<?php

$name = "Shah Alam";
$age = 23;
$dep = 'cse';


$infos = compact('name','age','dep');

echo "<pre>";
print_r($infos);
echo "</pre>";
