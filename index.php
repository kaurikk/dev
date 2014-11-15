<?php

require_once 'PHP/__autoloader.php';

use PHP\Factory;

$car = Factory::build(Factory::VEHICLE_CAR, 'BMW', 'M6', 'silver');
$bike = Factory::build(Factory::VEHICLE_MOTORCYCLE, 'BMW', 'RS1200', 'black');
var_dump($car);


var_dump(Factory::getVehiclesBuilt());