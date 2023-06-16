<?php

$emp = [
    [1,"Shah alam",'web developer',20000],
    [1,"Shah alam",'web developer',20000],
    [1,"Shah alam",'web developer',20000],
    [1,"Shah alam",'web developer',20000],
];


$emp = [
    [
        'id' => 1,
        'name' => 'Shah Alam',
        'deg' => "WEB DEVELOPER",
        'salary' => 20000
    ],
    [
        'id' => 2,
        'name' => 'John Doe',
        'deg' => "SOFTWARE ENGINEER",
        'salary' => 25000
    ],
    [
        'id' => 3,
        'name' => 'Jane Smith',
        'deg' => "GRAPHIC DESIGNER",
        'salary' => 18000
    ],
    [
        'id' => 4,
        'name' => 'Mike Johnson',
        'deg' => "DATA ANALYST",
        'salary' => 22000
    ]
];


$emp = [
    [
        'id' => 1,
        'name' => 'Shah Alam',
        'deg' => "WEB DEVELOPER",
        'salary' => 20000
    ],
    [
        'id' => 2,
        'name' => 'John Doe',
        'deg' => "SOFTWARE ENGINEER",
        'salary' => 25000
    ],
    [
        'id' => 3,
        'name' => 'Jane Smith',
        'deg' => "GRAPHIC DESIGNER",
        'salary' => 18000
    ],
    [
        'id' => 4,
        'name' => 'Mike Johnson',
        'deg' => "DATA ANALYST",
        'salary' => 22000
    ]
];

$empObjects = [];
foreach ($emp as $employee) {
    $empObject = new stdClass();
    $empObject->id = $employee['id'];
    $empObject->name = $employee['name'];
    $empObject->deg = $employee['deg'];
    $empObject->salary = $employee['salary'];
    $empObjects[] = $empObject;
    print_r($empObject);
}


 


?>


<table border="1px" cellpadding="5px">
    <thead>
        <th>Emp id</th>
        <th>Name</th>
        <th>Degisnation</th>
        <th>Salary</th>
    </thead>

    <tbody>
        <?php foreach($emp as list('id'=> $id,'name'=>$name, 'deg' => $deg, 'salary'=> $salary)){?>
            <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $deg ?></td>
            <td><?php echo $salary ?></td>
        </tr>
        <?php
        }
        ?>
      
    </tbody>
</table>