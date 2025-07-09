<!--Destructor-->
What is a Destructor in PHP OOP?
In PHP, a destructor is a special method in a class that is automatically called
when an object is no longer needed or goes out of scope—typically when the script
ends or the object is explicitly destroyed (e.g., using unset()).
It’s used to perform cleanup tasks, such as closing files, 
releasing database connections, or freeing resources.

Key Points:
Defined with the __destruct method name.
Automatically invoked when the object is destroyed or the script terminates.
Takes no parameters and returns no value.
Useful for releasing resources or logging final actions.

<?php
class Filehandler{
    public function __Construct(){
        echo "Opening a file";
    }

    public function ProcessFile(){
        echo "Processing the file";
    }

    public function __destruct(){
        echo "Closing the file";
    }   
}
$file=new Filehandler();
$file->ProcessFile();

?>