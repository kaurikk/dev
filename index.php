<?php

require_once 'PHP/__autoloader.php';

use PHP\Factory;

// Build a car
$car = Factory::build(Factory::VEHICLE_CAR, 'BMW', 'M6', 'silver');
$bike = Factory::build(Factory::VEHICLE_MOTORCYCLE, 'BMW', 'RS1200', 'black');
// Accelerate to 50km/h
$car->accelerate(50);
$car->brake(40);

echo sprintf('Current speed: %s km/h' . "\n", $car->getCurrentSpeed());







echo sprintf('No of vehicles built: %s' . "\n", Factory::getNoOfVehiclesBuilt());
