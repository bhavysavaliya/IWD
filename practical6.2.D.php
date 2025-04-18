<?php 
function replaceWord($text, $search, $replace) { 
return str_ireplace($search, $replace, $text);  
} 
$input = "Hello World"; 
echo replaceWord($input, "world", "PHP") . "<br>"; 
?> 