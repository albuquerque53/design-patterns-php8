<?php

require_once __DIR__ . '/../Product/CarInterface.php';

abstract class CarCreator
{
    // The getNewCar must return a Car implementation
    abstract public function getNewCar(): CarInterface;

    public function drive(string $keys): string
    {
        $car = $this->getNewCar();

        $car->start($keys);
        $car->accelerate();

        return 'Driving...';
    }
}
