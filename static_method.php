<!-- Static methods belong to the class itself rather than individual objects. 
You call them directly on the class without creating an instance.

You can call it without creating an object.
Use the static keyword to define it.
Call it using ClassName::methodName(). -->

<?php
class MathHelper {
    // Static method
    public static function square($number) {
        return $number * $number;
    }

    public static function cube($number) {
        return $number * $number * $number;
    }
}

// Call static methods directly using class name
echo "Square of 5 is: " . MathHelper::square(5) . "<br>";
echo "Cube of 3 is: " . MathHelper::cube(3);
?>
