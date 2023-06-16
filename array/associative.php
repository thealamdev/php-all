<?php

$infos = [
    ['name' => 'Shah Alam',
    'age' => 21,
    'department' => 'B.Sc in CSE',
    'fees' => 20000,],

    ['name' => 'Shah ',
    'age' => 27,
    'department' => 'B.Sc in EEE',
    'fees' => 21000,]

];


$subject_name = [
    [
        'name' => 'Bangla',
        'mark' => "58",
    ],

    [
        'name' => 'English',
        'mark' => "70",
    ],

    [
        'name' => 'Math',
        'mark' => '89',
    ],

    [
        'name' => 'Science',
        'mark' => '85',
    ],

    [
        'name' => 'Islam',
        'mark' => '88',
    ],
     
];


echo "<pre>";
print_r($subject_name);
echo "</pre>";

echo "<table>";
foreach($subject_name as $name){
    echo "<tr>";
    echo "<td>";
    echo $name['name'];    
    echo"</td>";

    echo "<td>";
    echo $name['mark'];    
    echo"</td>";
    echo "</tr>";
}
echo "</table>";
