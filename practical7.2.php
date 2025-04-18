<?php
class Demo{
    public $message = "Hello, world!";

    public function greet() {
        echo $this->message . "<br>";
    }
}

$obj = new Demo();
echo $obj->message . "<br>"; 
?>
