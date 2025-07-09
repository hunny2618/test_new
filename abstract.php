PHP Abstract Classes: 
In PHP, an abstract class is a special type of class that cannot be instantiated directly (you can’t create
an object from it). It’s like a partial blueprint, designed to be inherited by other classes (subclasses).
An abstract class can contain both regular methods (with complete code) and abstract methods (without code,
just a declaration). Subclasses must implement the abstract methods to provide specific functionality. 
Think of it as a parent setting rules that children must follow!

Abstract classes cannot be instantiated directly.
Must use extends to inherit from them.
Abstract methods must be defined in child classes.
Can contain both abstract and normal methods.



<?php
abstract class Animal {
    abstract public function makeSound();

    public function eat() {
        return "Eating... 🍕";
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Bark! 🐕";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! 🐱";
    }
}

$dog = new Dog();
echo $dog->makeSound(); 
echo "<br>";
echo $dog->eat();   

echo "<br>";
$cat = new Cat();
echo $cat->eat();

?>