<?php

$array = [
    'name' => 'Shah Alam',
    'age' => 21,
    'dep' => 'CSE',
    'education' => [
        'ssc' => 'tilli high school',
        'hsc' => 'Khan Bahadur Awlad Hossain khan college',
        'versity' => 'City University',
    ],
];


$results = [
    'akash' => [
        'bangla' => 76,
        'english' => 98, 
        'islam' => 70, 
        'physics' => 80, 
    ],

    'kumar' => [
        'bangla' => 75,
        'english' => 43, 
        'islam' => 65, 
        'physics' => 43, 
    ],

];

foreach($results as $result){
     
    foreach($result as $r){
        echo $r . "<br>";
    }
}


echo "<pre>";
    print_r($array);
echo "</pre>";