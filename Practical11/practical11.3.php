<?php 
// Associative array 
$employee = [ 
'name' => 'John Doe', 
'id' => 'EMP123', 
'department' => 'Finance', 
'salary' => 62000 
]; 
// Convert to JSON 
$jsonString = json_encode($employee, JSON_PRETTY_PRINT); 
echo "JSON Format:\n$jsonString\n\n"; 
// Convert back to associative array 
$array = json_decode($jsonString, true); 
echo "Array Format:\n"; 
print_r($array); 
?> 