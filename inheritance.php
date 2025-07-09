<!-- What is Inheritance in PHP?
Inheritance allows a class (child) to inherit properties and methods from another class (parent).

It helps in code reusability – you write common code in one place and reuse it in multiple classes. -->


<?php
class Animal{
    public function makesound(){
        echo "Animal makes a sound <br>";
    }
}

class Dog extends Animal{
public function bark(){
echo "Dog bark: Woof Woof! <br>";
   }
}

$myDog=new Dog();
$myDog->bark();
$myDog->makesound();
?>


//2

<?php
class User{
    public $name;   

    public function login(){
        echo "$this->name logged in <br>";
    }
}

class  Admin extends User{
    public function accessDashboard(){
        echo "$this->name access the dashboard";
    }
}

$admin=new Admin;
$admin->name="Shubham";
$admin->login();
$admin->accessDashboard();

?>