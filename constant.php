<!-- PHP Constant:
In PHP, a constant is a special type of variable that holds a value that cannot be changed once it’s defined. 
Unlike regular variables (which use $), constants are fixed and remain the same throughout the program.
They’re useful for storing values like fixed numbers, settings, or strings that you don’t want to accidentally
modify, such as a tax rate or a site name.

Key Points:
Defined using define() or the const keyword.
No $ symbol is used in the name.
By convention, constant names are in UPPERCASE.
Accessible anywhere in the script (global scope) if defined with define(). -->


<?php
define("SITE_NAME","RKWebdevlop");
const PI=3.16;

class circle{
    const RADIUS=5;

    public function getRadius(){
        return PI* SELF::RADIUS*SELF::RADIUS;
    }
}

$circle=new Circle;
 echo "Website: ". SITE_NAME;
 echo "<br>";
 echo "Value of PI: ". PI;
 echo "<br>";
 echo "Circle Area:".$circle->getRadius();


?>



<!-- Usage:
Constants are called directly by name (e.g., SITE_NAME, PI).
In classes, use self:: for constants within the same class.
The getArea() method uses both PI and RADIUS to calculate the area of a circle. -->