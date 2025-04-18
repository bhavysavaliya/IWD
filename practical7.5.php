<?php
interface Animal {
    public function speak();
}

interface Pet {
    public function play();
}

class Dog implements Animal, Pet {
    public function speak() {
        echo "Woof!<br>";
    }

    public function play() {
        echo "Dog is playing.<br>";
    }
}

$obj = new Dog();
$obj->speak();
$obj->play();
?>
