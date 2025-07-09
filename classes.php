<!--Blue Print-!>
Blueprint
What it is: A blueprint is like a detailed plan or map.
It’s a drawing or design that shows exactly how something should be built or made.
Simple Example: Imagine you want to build a toy car. 
A blueprint is the sketch that shows the shape, size, wheels, and parts of the car. 
You follow this plan to make the actual toy car.

//Template
Template: A template is a reusable pattern or mold for creating similar things. 
Think of a cookie cutter for making star-shaped cookies.
The cutter is the template—it defines the shape, and you use it to make many cookies that 
look the same but can have different flavors or decorations. 
Templates are often simpler and used for things like documents, designs, or code.    

//Class
Class: Think of a class as a blueprint or template for creating something.
For example, if you have a blueprint for a "Car," it defines what a car 
should have—like wheels, 
doors, and an engine—and what it can do, like drive or honk.

//Objects
Object: An object is an actual thing you build using that blueprint. 
So, if "Car" is the class, you can create objects like "myRedCar" or "yourBlueCar." 
Each object follows the class's design but can have its own unique details, 
like color or speed.

Example
Class: "Car"
Properties: color, model, speed
Actions: drive, stop, honk
Objects:
"myRedCar": A red car, model "Toyota," speed 60 mph
"yourBlueCar": A blue car, model "Honda," speed 70 mph
In programming, you use classes to define the structure and behavior,
 and objects to represent specific instances with real values!

 <?php
// Define the Car class
class Car {
    // Properties
    public $brand;
    public $color;

    // Constructor method to initialize properties
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Method to display car details
    public function getDetails() {
        return "This is a {$this->color} {$this->brand} car.";
    }
}

// Create objects (instances) of the Car class
$car1 = new Car("Toyota", "Red");
$car2 = new Car("Honda", "Blue");

// Call the getDetails method on the objects
echo $car1->getDetails(); // Output: This is a Red Toyota car.
echo "<br>";
echo $car2->getDetails(); // Output: This is a Blue Honda car.
?>

Class Definition:
The Car class is defined with two properties: $brand and $color.
The public keyword means these properties and methods can be accessed from outside the class.
The __construct method is a special method (constructor) that runs automatically when an object is created, 
initializing the properties with values.

Objects:
$car1 = new Car("Toyota", "Red") creates an object of the Car class, setting its brand to "Toyota" 
and color to "Red".
$car2 = new Car("Honda", "Blue") creates another object with different values.

Methods:
The getDetails method uses the object’s properties ($this->brand and $this->color) to
return a description.
$this refers to the current object, allowing access to its properties and methods.

Output:
When we call $car1->getDetails(), it outputs "This is a Red Toyota car."
For $car2, it outputs "This is a Blue Honda car."