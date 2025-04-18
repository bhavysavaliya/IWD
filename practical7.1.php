<?php 
class MyClass { 
    public $name; 
 
    public function __construct($name) { 
        $this->name = $name; 
        echo "Constructor called: Hello, $this->name!<br>"; 
    } 
 
    public function __destruct() { 
        echo "Destructor called: Goodbye, $this->name!<br>"; 
    } 
} 
 
$obj = new MyClass("John"); 
?> 