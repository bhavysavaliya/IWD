<?php 
class Animal { 
    public function speak() { 
        echo "Animal speaks.<br>"; 
    } 
} 
 
class Dog extends Animal { 
     
    public function speak() { 
        echo "Dog barks.<br>"; 
    } 
} 
 
$obj = new Dog(); 
$obj->speak();  
?> 