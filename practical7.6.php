<?php 
 
class Animal { 
    public function breathe() { 
        echo "Animal breathes.<br>"; 
    } 
} 
 
class Mammal extends Animal { 
    public function walk() { 
        echo "Mammal walks.<br>"; 
    } 
} 
 
class Dog extends Mammal { 
    public function bark() { 
        echo "Dog barks.<br>"; 
    } 
} 
 
$obj = new Dog(); 
$obj->breathe();  
$obj->walk();     
$obj->bark();     
?> 