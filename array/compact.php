<?php

$name = "Shah Alam";
$age = 23;
$dep = 'cse';


$infos = compact('name','age','dep');

echo "<pre>";
print_r($infos);
echo "</pre>";


$keys = array_keys($infos);
$values = array_values($infos);

print_r($keys);
echo "<br>";
print_r($values);
echo "<br>";

for($i=0;$i<count($infos);$i++){
    echo $keys[$i] . " = " . $values[$i] . "<br>";
}
