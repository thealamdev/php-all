<?php
date_default_timezone_set('Asia/Dhaka');
$date = localtime(time(),true);

echo "<pre>";
    print_r($date);
echo"</pre>";