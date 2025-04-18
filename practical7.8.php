<?php 
class Calculator { 
    public function add() { 
        $args = func_get_args(); 
        return array_sum($args); 
    } 
} 
 
$obj = new Calculator(); 
echo "Sum: " . $obj->add(1, 2) . "<br>";  
echo "Sum: " . $obj->add(1, 2, 3, 4) . "<br>";  
?> 