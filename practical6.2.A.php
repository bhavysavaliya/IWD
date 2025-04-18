<?php 
function isAllLowercase($str) { 
    return ctype_lower(str_replace(' ', '', $str)); 
} 
 
$input = "hello world"; 
echo isAllLowercase($input) ? "Lowercase<br>" : "Not lowercase<br>"; 
?> 