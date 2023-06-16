<?php


// indexing array:

$array = [
    1,3,4,5,6,"Shah alam"
];

echo "<pre>";
print_r($array);  
echo "</pre>";


for($i = 0; $i<count($array);$i++){
    echo "array element is" . $array[$i] , "<br>";
}


?>