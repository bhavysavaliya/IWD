<?php 
 
class Animal { 
    public $name; 
     
    public function __construct($name) { 
        $this->name = $name; 
    } 
 
    public function speak() { 
        echo "$this->name makes a sound.<br>"; 
    } 
} 
 
class Dog extends Animal { 
    public function bark() { 
        echo "$this->name barks!<br>"; 
    } 
} 
 
$obj = new Dog("Buddy"); 
$obj->speak();  
$obj->bark();   
?>