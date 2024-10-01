<?php

class MySingleton {
    private static $instance = null;
    private $arg1;
    private $arg2;
    private $arg3;

    // Private constructor to prevent direct object creation
    private function __construct($arg1, $arg2, $arg3) {
        $this->arg1 = $arg1;
        $this->arg2 = $arg2;
        $this->arg3 = $arg3;
    }

    // Static method to get the singleton instance
    public static function getInstance($arg1, $arg2, $arg3) {
        if (self::$instance === null) {
            self::$instance = new MySingleton($arg1, $arg2, $arg3);
        }
        return self::$instance;
    }

    // Example method to demonstrate functionality
    public function displayArguments() {
        echo "Argument 1: " . $this->arg1 . "\n";
        echo "Argument 2: " . $this->arg2 . "\n";
        echo "Argument 3: " . $this->arg3 . "\n";
    }
}

// Usage
$singleton = MySingleton::getInstance('value1', 'value2', 'value3');
$singleton->displayArguments();
