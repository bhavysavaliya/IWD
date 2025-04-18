<?php 
interface Shape { 
    public function area(); 
} 
 
class Circle implements Shape { 
    public $radius; 
 
    public function __construct($radius) { 
        $this->radius = $radius; 
    } 
 
    public function area() { 
        return pi() * $this->radius * $this->radius; 
    } 
} 
 
$obj = new Circle(5); 
echo "Area of circle: " . $obj->area() . "<br>"; 
?> 