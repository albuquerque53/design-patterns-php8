<?php

require_once __DIR__ . '/Creator/CarCreator.php';
require_once __DIR__ . '/ConcreteCreator/MaverickCreator.php';
require_once __DIR__ . '/ConcreteCreator/VirtusCreator.php';

function clientCode(CarCreator $car, string $keys)
{
    return $car->drive($keys);
}

$maverickBolado = new MaverickCreator;
$virtusDoMal = new VirtusCreator;

echo clientCode($maverickBolado, 'MaveraKeys');
echo clientCode($virtusDoMal, 'VirtusKeys');