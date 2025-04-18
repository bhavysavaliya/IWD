<?php 
$terms = 10; 

$num1 = 0; 
$num2 = 1; 
echo "Fibonacci series up to $terms terms: <br>"; 
for ($i = 0; $i < $terms; $i++) { 
echo $num1 . " "; 

$next = $num1 + $num2; 
$num1 = $num2; 
$num2 = $next; 
} 
?>