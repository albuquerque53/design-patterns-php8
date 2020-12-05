<?php

/**
 * Volkswagen Virtus is a driveless car,
 * we don't need care about gears.
 */

require_once __DIR__ . '/../Product/CarInterface.php';

class Virtus implements CarInterface
{
/** 
     * PHP 8 New Feature: 
     * Constructor Property Promotion 
     * RFC: https://wiki.php.net/rfc/constructor_promotion
     */
    public function __construct(
        private string $state = 'Off'
    )
    {
        // Don't need to do anything
    }
    
    public function start(string $key)
    {
        echo 'Trying to start the Virtus!';
        if ($key !== 'VirtusKeys') {
            echo 'Wrong Keys!';
            die;
        }
        echo 'Engine started!';
        $this->state = 'On';
    }

    public function accelerate(): string
    {
        if ($this->state === 'On') {
            return '';
        }

        return 'First, start the car and shift the first gear';
    }
}
