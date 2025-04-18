<?php 
class Demo { 
    private $name; 
 
    public function setName($name) { 
        $this->name = $name; 
    } 
 
    public function getName() { 
        return $this->name; 
    } 
} 
 
$obj = new Demo(); 
$obj->setName("Alice"); 
echo "Name: " . $obj->getName() . "<br>"; 
?> 