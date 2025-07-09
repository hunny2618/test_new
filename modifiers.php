<!-- PHP Private Access Modifier: 
In PHP, the private access modifier is a keyword used in classes to define properties (variables) 
or methods (functions) that can be accessed only within the class itself. Unlike public or protected,
 private members are completely restricted—subclasses (classes that inherit from it) and external code 
 cannot access them. Think of it as a “class-only secret” that stays locked inside the class!

Key Point: private allows access only within the same class, blocking subclasses and outside code. -->

<?php
class Car{
    private $fuellevel=100;

    private function checkfuel(){
        return "Fuel level is at $this->fuellevel%";
    }

    public function getStatus(){
        return $this->checkfuel();
    }

    public function refuel(){
        $this->fuellevel = 100; // Can modify private property inside the class
        return "Car refueled! " . $this->checkFuel();
    }
}


class SportsCar extends Car {
    public function showFuelStatus() {
        // Cannot access private property or method from parent class
        // This would cause an error if uncommented:
        // return "Fuel: $this->fuelLevel, Status: " . $this->checkFuel();
        return "Cannot check fuel directly from SportsCar!";
    }
}


// Create objects
$myCar = new Car();
$mySportsCar = new SportsCar();

// Access public method to see private content indirectly
echo $myCar->getStatus(); // Outputs: Fuel level is at 100%
echo "<br>";
echo $myCar->refuel();   // Outputs: Car refueled! Fuel level is at 100%
echo "<br>";
// Access subclass method
echo $mySportsCar->showFuelStatus(); // Outputs: Cannot check fuel directly from SportsCar!

// These would cause errors if uncommented:
// echo $myCar->fuelLevel; // Error: Cannot access private property
// echo $myCar->checkFuel(); // Error: Cannot access private method


?>