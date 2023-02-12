<?php
// for each loop:

    // declaring index array:
/*

    $city = [
        "Dhaka",
        "Manikganj",
        "Ranjpur",
        "Tangail",
    ];

    echo "$city[3]\n";
    print_r($city)."\n";
    var_dump($city);

    foreach($city as $value){
        echo "$value\n";

    }


    // declaring associative array:

    $colors = [
        "red" => 123,
        "white" => "#fff",
        "gray" => "#444",
    ];

    foreach($colors as $code => $value){
        echo "$code = $value\n ";
        echo $colors["red"];
    }

    */


// declaring indexing array:

$city = [
    "dhaka",
    "manikganj",
    "khulna",
    "josor",

];


echo $city[0]. "\n";
echo $city[2]."\n";

// print by foreach loop:

    foreach($city as $value){
        echo $value . "\n";
    }


    // declaring associative array:

    $colors = [
         "red" => "#3454",
         "blue" => "#458",
         "white"  =>"#fff",
    ];

    // print by index number :

    echo $colors["red"]."\n";
    echo $colors["white"];

    foreach($colors as $value){
        echo $value. "\n";
    }


    foreach($colors as $code => $value){
        echo "$code = $value \n";
    }


    $j=1;
    while($j<=10){
        echo "$j\n";
    }
