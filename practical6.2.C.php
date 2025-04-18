<?php 
function removeSpaces($str) { 
return preg_replace('/\s+/', '', $str); 
} 
$input = "he llo wo rld"; 
echo "Without spaces: " . removeSpaces($input) . "<br>"; 
?>