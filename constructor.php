<!--Constructor-->
What is a Constructor in PHP OOP?
In PHP, a constructor is a special method within a class that is automatically executed
 when an object of that class is created using the new keyword. Its primary purpose is to
  initialize the object’s properties with values, ensuring the object is ready for use.

Key Points:
Defined with the __construct method name.
Runs automatically upon object creation.
Often used to set initial values for properties via parameters.
Helps create objects in a consistent, predefined state. 

<?php

//Define the Book Class
class Book{
    //Properties
    public $title;
    public $author;
    //Constructor method
    public function __construct($title,$author){
        $this->title=$title;
        $this->author=$author;

        echo "New student registered: {$this->title}, Age: {$this->author}";
    }
}
$student=new Book("hari","Mongli")
?>

<!----------------------2------------------->

<?php
class Person {
    public $name;
    public $age;

    // Constructor Method
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "Hello, my name is $this->name and I am $this->age years old.<br>";
    }
}

// Create object and pass values directly to constructor
$person1 = new Person("Shubham", 28);

// Call a method
$person1->introduce();
?>
