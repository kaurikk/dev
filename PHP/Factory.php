<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:24
 */

namespace PHP;

use PHP\Vehicle\Car;
use PHP\Vehicle\Motorcycle;

class Factory
{
  const VEHICLE_CAR = 1;
  
  const VEHICLE_MOTORCYCLE = 2;

  private static $vehiclesBuilt = 0;

  public static function build($type, $make, $model, $color)
  {
    switch ($type)
    {
      case self::VEHICLE_CAR:
        $vehicle = new Car($make, $model, $color);
        break;
      case self::VEHICLE_MOTORCYCLE:
        $vehicle = new Motorcycle($make, $model, $color);
        break;
      default:
        throw new \Exception('Vehicle type not supported');
    }

    self::$vehiclesBuilt++;
    return $vehicle;
  }

  public static function getVehiclesBuilt()
  {
    return self::$vehiclesBuilt;
  }
}