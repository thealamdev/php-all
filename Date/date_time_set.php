<?php

$date = date_create('2022-5-14');

 

$newDate = (date_time_set($date,'10','40'));

echo date_format($newDate,'y-m-d h:i:s');
