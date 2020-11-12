<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$doubleBR = '<br><br>';

echo 'Bicycle time : <br>';
$bike = new Bicycle('Rouge');
$bike->setCurrentSpeed(15);
echo $bike->forward();
echo $bike->brake();

echo $doubleBR;

echo 'Car time : <br>';
$car = new Car('Bleue', 30, 'Diesel');
$car->getCurrentSpeed(10);
echo $car->forward();
echo $car->brake();