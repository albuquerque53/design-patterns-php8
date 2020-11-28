<?php

// Car Factory/Creator
abstract class CarFactory
{
    abstract public function getCar(): Car;

    public function drive(string $carKey): string
    {
        $car = $this->getCar();
        
        $car->startCar($carKey);
        $car->firstGear();
        return $car->accelerate();
    }    
}

// Specific Car Factory/Creator
class MaverickCreator extends CarFactory
{
    // Must implements the getCar method
    public function getCar(): Car
    {
        /** 
         * Returning a Maverick class because the Maverick 
         * will implement the Car iface in line 51
         */
        return new Maverick;
    }
}

// 2nd specific car creator
class MustangBossCreator extends CarFactory
{
    // Do the same as previous
    public function getCar(): Car
    {
        return new MustangBoss;
    }
}

// The cars classes must implement this Inteface
interface Car
{
    public function startCar($key);
    public function firstGear();
    public function accelerate(): string;
}

// Maverick class (mencioned in line 28)
class Maverick implements Car
{
    /** 
     * PHP 8 New Feature: 
     * Constructor Property Promotion 
     * RFC: https://wiki.php.net/rfc/constructor_promotion
     */
    public function __construct(
        private string $state = 'Off',
        private int $gearState = 0
    )
    {
        // Don't need to do anything
    }
    
    // Implementing the methods of Car iface
    public function startCar($key)
    {
        if ($key !== 'MaverickKeys') {
            echo 'Wrong Keys';
            die;
        }

        $this->state = 'On';
    }
    public function firstGear()
    {
        if ($this->state !== 'On') {
            echo 'First, start the car';
            die;
        }

        $this->gearState = 1;
    }
    public function accelerate(): string
    {
        if ($this->state === 'On' && $this->gearState !== 0) {
            return 'Vroon vrooooon';
        }
        
        return 'First, start the car and shift the first gear';
    }
}

//This class is mencioned in line 38
class MustangBoss implements Car
{
    // Will do the 'same' as previous
    public function __construct(
        private string $state = 'Off',
        private int $gearState = 0
    )
    {
        //
    }

    public function startCar($key)
    {
        if ($key !== 'MustangBossKeys') {
            return 'Wrong Keys';
            die;
        }

        echo 'Trying... it takes a while to get this motor started';
        echo 'The Boss is on';
        $this->state = 'On';
    }
    public function firstGear()
    {
        if ($this->state !== 'On') {
            echo 'First, start the car';
            die;
        }

        $this->gearState = 1;
    }
    public function accelerate(): string
    {
        if ($this->state === 'On' && $this->gearState !== 0) {
            return 'Vroon vrooooon';
        }
        
        return 'First, start the car and shift the first gear';
    }
}

// This function will use the Factory Method Pattern above
function driver(CarFactory $car, string $key)
{
    return $car->drive($key);
}

// Data output
echo driver(new MustangBossCreator, 'MustangBossKeys') . '  ';
echo driver(new MaverickCreator, 'MaverickKeys');
