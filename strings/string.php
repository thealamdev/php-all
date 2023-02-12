<?php
#taking a input: 
 $string = "Hello Bangladesh and all the people";
 echo strlen($string)."<br>";
 echo str_word_count($string)."<br>";
 echo strrev($string)."<br>";
 echo strpos($string,"all the")."<br>";
 echo str_replace("Bangladesh","world",$string)."<br>";

 echo $string .= "Hey"; 

?>