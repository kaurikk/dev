<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:56
 */

namespace PHP\Vehicle;

use PHP\Vehicle;
use PHP\Interfaces\MotorcycleInterface;

class Motorcycle extends Vehicle implements MotorcycleInterface
{
    protected function getFactoryMaxSpeed()
    {
        return 325;
    }

    public function tilt()
    {
        echo __FUNCTION__;
    }

    public function putOnCenterStand()
    {
        echo __FUNCTION__;
    }
}
