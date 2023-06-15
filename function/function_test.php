<?php

// write a code to find the result of a student:

function result($bangla, $english, $math, $science, $islam){
    $total_mark = $bangla + $english + $math + $science + $islam;
    $subject_name = [
        [
            'name' => 'Bangla',
            'mark' => $bangla,
        ],

        [
            'name' => 'English',
            'mark' => $english,
        ],

        [
            'name' => 'Math',
            'mark' => $math,
        ],

        [
            'name' => 'Science',
            'mark' => $science,
        ],

        [
            'name' => 'Islam Education',
            'mark' => $islam,
        ],
         
    ];


    foreach($subject_name as $key => $s_name){
        echo "Mark in " .  $s_name['name'] . "is " . $s_name['mark'] . "<br>";
        
    }
     
    echo "Total Mark is {$total_mark}"; 
    
}

// calling the function:(function with parameter); -> this is very important for project base work:

result(60,76,76,45,89);