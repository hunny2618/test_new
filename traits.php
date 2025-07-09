<!-- What is a Trait in PHP?
A trait is a mechanism for code reuse in PHP.
It allows you to include methods into multiple classes without using inheritance.

Why use Traits?
PHP does not support multiple inheritance, but traits solve that problem.
You can write common functionality once and reuse it across many classes. -->

<?php

// Trait for logging
trait Logger {
    public function log($message) {
        echo "Log: $message<br>";
    }
}

// Trait for sending notifications
trait Notifier {
    public function notify($to) {
        echo "Notification sent to $to<br>";
    }
}

class User {
    use Logger, Notifier;

    public function register($username) {
        echo "User '$username' registered.<br>";
        $this->log("User registration logged.");
        $this->notify($username);
    }
}
// Usage
$user = new User();
$user->register("Shubham");

?>