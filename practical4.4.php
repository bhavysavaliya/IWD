<?php 

$number = 5; 

$limit = 10; 
echo "Multiplication Table for $number:<br><br>"; 
for ($i = 1; $i <= $limit; $i++) { 
$result = $number * $i; 
echo "$number x $i = $result <br>"; 
} 
?>