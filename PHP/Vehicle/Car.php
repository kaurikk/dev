<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:52
 */

namespace PHP\Vehicle;

use PHP\Vehicle;
use PHP\Interfaces\Car as VehicleInterface;

class Car extends Vehicle implements VehicleInterface
{
    protected function getFactoryMaxSpeed()
    {
        return 250;
    }

    public function openDoor()
    {
        // TODO: Implement openDoor() method.
    }

    public function openHood()
    {
        // TODO: Implement closeDoor() method.
    }
}