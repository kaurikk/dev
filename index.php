<?php

require_once 'PHP/autoloader.php';

use PHP\Factory;

// Build a car
$car = Factory::build(Factory::VEHICLE_CAR, 'BMW', 'M6', 'silver');

// Accelerate to 50km/h
$car->accelerate(50);
echo sprintf('Current speed: %s km/h' . "\n", $car->getCurrentSpeed());

// Break to 40
$car->brake(40);
echo sprintf('Current speed: %s km/h' . "\n", $car->getCurrentSpeed());

// Break to 0
$car->brake(30);
echo sprintf('Current speed: %s km/h' . "\n", $car->getCurrentSpeed());


echo sprintf('No of vehicles built: %s' . "\n", Factory::getNoOfVehiclesBuilt());