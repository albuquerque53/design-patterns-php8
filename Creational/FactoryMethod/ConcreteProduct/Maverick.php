<?php

/**
 * Ford Maverick is a manual car,
 * we need set the gears manually
 */

require_once __DIR__ . '/../Product/CarInterface.php';

class Maverick implements CarInterface
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
    
    public function start(string $key)
    {
        echo 'Trying to start the Mustang Boss!';
        if ($key !== 'MaveraKeys') {
            echo 'Wrong Keys!';
            die;
        }
        echo 'Engine started! Vrooooom';
        $this->state = 'On';
    }

    private function firstGear()
    {
        if ($this->state !== 'On') {
            echo 'To put in the 1st engine, first start the car';
            die;
        }
        echo 'The boss is into first gear!';
        $this->gearState = 1;
    }

    public function accelerate(): string
    {
        $this->firstGear();

        if ($this->state === 'On' && $this->gearState !== 0) {
            return 'Vroon vrooooon';
        }
        
        return 'First, start the car and shift the first gear';
    }
}
