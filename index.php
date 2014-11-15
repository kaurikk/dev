<?php

require_once 'PHP/__autoloader.php';

use PHP\Factory;

$car = Factory::build(Factory::VEHICLE_CAR, 'BMW', 'M6', 'silver');
$bike = Factory::build(Factory::VEHICLE_MOTORCYCLE, 'BMW', 'RS1200', 'black');
var_dump($car);


echo sprintf('No of vehicles build: %s' . "\n", Factory::getNoOfVehiclesBuilt());
