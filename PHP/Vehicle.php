<?php
/**
 * Created by PhpStorm.
 * User: kauri
 * Date: 15/11/14
 * Time: 12:49
 */

namespace PHP;

abstract class Vehicle
{
  protected $make;

  protected $model;

  protected $color;

  public function __construct($make, $model, $color)
  {
    $this->make = $make;

    $this->model = $model;

    $this->color = $color;
  }
}