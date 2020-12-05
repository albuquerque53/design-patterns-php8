<?php

class Singleton
{
    // We will use this in line 17
    private static ?Singleton $instance;

    // All ways to instanciate this class must became inaccessible 
    private function __construct() {}
    private function __clone() {}
    // wakeUp must be public, but it throw a exception
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     *  Now, we will use a static function to
     *  return a controlled instance of this class
     */
    public static function getInstance(): Singleton
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    } 
}

// Checking
function singletonCheck()
{
    $singletonInstance1 = Singleton::getInstance();
    $singletonInstance2 = Singleton::getInstance();

    if ($singletonInstance1 === $singletonInstance2) {
        return true;
    } else {
        return false;
    }
}

echo singletonCheck(); // 1 = true, 0 = false
