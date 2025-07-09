PHP Interfaces: A Simple Explanation
In PHP, an interface is a special type of blueprint that defines a set of methods that a class must implement, 
but it doesn’t provide any implementation (code) for those methods. Unlike abstract classes, interfaces only 
declare methods (and sometimes constants), and all methods are implicitly public. Classes that use an interface
 must provide the code for all its methods. Think of it as a contract: “If you sign this, you promise to include 
 these methods!”

Key Points:
Defined with the interface keyword.
Cannot be instantiated (no objects from an interface).
All methods are abstract by default (no body, just signatures).
A class uses the implements keyword to follow an interface.
A class can implement multiple interfaces (unlike inheritance, where only one class can be extended).


Feature       	        Interface         	                Abstract Class
Method body allowed?	❌ No	                           ✅ Yes (optional)
Object creation?	    ❌ Cannot create directly	        ❌ Cannot create directly
Use in class	       implements InterfaceName	extends AbstractClassName
Multiple inheritance?	✅ Yes (can implement multiple interfaces)	❌ No (can only extend one abstract class)


<?php
// Define an interface
interface Animal {
    public function makeSound();
   
}

// Implement the interface in a class
class Dog implements Animal {
    public function makeSound() {
        echo "Dog says: Woof Woof!<br>";
    }
}

// Another class implementing the same interface
class Cat implements Animal {
    public function makeSound() {
        echo "Cat says: Meow Meow!<br>";
    }
}

// Create objects
$dog = new Dog();
$cat = new Cat();

$dog->makeSound();
$cat->makeSound();
?>
