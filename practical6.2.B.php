<?php 
function reverseString($str) { 
    $reversed = ''; 
    for ($i = strlen($str) - 1; $i >= 0; $i--) { 
        $reversed .= $str[$i]; 
    } 
    return $reversed; 
} 
 
$input = "hello"; 
echo "Reversed: " . reverseString($input) . "<br>"; 
?> 