<?php

// by using mkdate()  or gmmktime() we can print anything of privious date. For Example, i want to show what is the week name of my birthday.
date_default_timezone_set('Asia/Dhaka');
$date = gmmktime('6','10','59','11','28','1999');

echo "I born in " . date('l',$date);