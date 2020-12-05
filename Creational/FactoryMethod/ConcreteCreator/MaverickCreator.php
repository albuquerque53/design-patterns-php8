<?php

require_once __DIR__ . '/../Creator/CarCreator.php';
require_once __DIR__ . '/../Product/CarInterface.php';
require_once __DIR__ . '/../ConcreteProduct/Maverick.php';

// Must extend the Creator
class MaverickCreator extends CarCreator
{
    // And override the factory method
    public function getNewCar(): CarInterface
    {
        return new Maverick;
    }
}
