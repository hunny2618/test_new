<!-- What are Static Properties in PHP?
A static property belongs to the class itself, not to any instance (object) of the class.

Declared using the static keyword.

Shared among all objects of the class.

Accessed using ClassName::$propertyName or self::$propertyName (inside the class). -->

<?php
class Student {
    // Static property to count students
    public static $studentCount = 10;

    public function roti() {
        // Increase count every time a new student is created
        self::$studentCount++;
    }
}

// Create student objects
$s1 = new Student();
$s2 = new Student();
$s3 = new Student();

$s1->roti();
$s1->roti();

// Access static property without creating object
echo "Total Students: " . Student::$studentCount;
?>
