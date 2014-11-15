<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:56
 */

namespace PHP\Vehicle;

use PHP\Vehicle;
use PHP\Interfaces\Motorcycle as VehicleInterface;

class Motorcycle extends Vehicle implements VehicleInterface
{
  protected function getFactoryMaxSpeed()
  {
    return 325;
  }

  public function tilt()
  {
    // TODO: Implement tilt() method.
  }

  public function putOnCenterStand()
  {
    // TODO: Implement putOnCenterStand() method.
  }
}