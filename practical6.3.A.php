<?php 
function generateRandomNumber($min, $max) { 
return rand($min, $max);   
} 
$min = 10; 
$max = 100; 
echo "Random number between $min and $max: " . generateRandomNumber($min, $max) . "<br>"; 
?>