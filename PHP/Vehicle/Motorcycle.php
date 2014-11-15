<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:56
 */

namespace PHP\Vehicle;

use PHP\Vehicle;

class Motorcycle extends Vehicle
{
  protected function getFactoryMaxSpeed()
  {
    return 325;
  }
}