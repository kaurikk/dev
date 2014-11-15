<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:52
 */

namespace PHP\Vehicle;

use PHP\Vehicle;
use PHP\Interfaces\CarInterface;

class Car extends Vehicle implements CarInterface
{
    protected function getFactoryMaxSpeed()
    {
        return 250;
    }

    public function openDoor()
    {
        echo __FUNCTION__;
    }

    public function openHood()
    {
        echo __FUNCTION__;
    }
}
