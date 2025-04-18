<?php 
abstract class Animal { 
     
    public abstract function makeSound(); 
 
    public function breathe() { 
        echo "Animal is breathing.<br>"; 
    } 
} 
 
class Dog extends Animal { 
    public function makeSound() { 
        echo "Woof!<br>"; 
    } 
} 
 
$obj = new Dog(); 
$obj->makeSound(); 
$obj->breathe(); 
?> 