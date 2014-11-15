<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:52
 */

namespace PHP\Vehicle;

use PHP\Vehicle;

class Car extends Vehicle
{
  protected function getFactoryMaxSpeed()
  {
    return 250;
  }
}