<?php

$emp = [
    [1,"Shah alam",'web developer',20000],
    [1,"Shah alam",'web developer',20000],
    [1,"Shah alam",'web developer',20000],
    [1,"Shah alam",'web developer',20000],
];


foreach($emp as list($id,$name,$deg,$salary)){
    echo "$id $name $deg $salary <br>";
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
        <?php foreach($emp as list($id,$name,$deg,$salary)){?>
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