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
        'mark' => "bangla",
    ],

    [
        'name' => 'English',
        'mark' => "english",
    ],

    [
        'name' => 'Math',
        'mark' => 'math',
    ],

    [
        'name' => 'Science',
        'mark' => 'science',
    ],

    [
        'name' => 'Islam Education',
        'mark' => 'islam',
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
