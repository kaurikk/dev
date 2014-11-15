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
    private $make;

    private $model;

    private $color;

    private $currentSpeed = 0;

    private $maxSpeed = 0;

    private $buildDate = null;

    abstract protected function getFactoryMaxSpeed();

    final public function __construct($make, $model, $color)
    {
        $this->make = $make;

        $this->model = $model;

        $this->color = $color;

        $this->maxSpeed = $this->getFactoryMaxSpeed();

        $this->buildDate = new \DateTime('now', new \DateTimeZone('Europe/Tallinn'));

        if ($this->maxSpeed <= 0) {
            throw new \Exception(sprintf('MaxSpeed for "%s" must be bigger than 0', get_class($this)));
        }
    }

    final public function accelerate($noOfUnits = 0)
    {
        if ($noOfUnits < 0) {
            throw new \Exception('Acceleration can not be negative');
        }

        if ($this->currentSpeed = $noOfUnits > $this->maxSpeed) {
            trigger_error(sprintf('Maximum speed %s reached', $this->maxSpeed), E_USER_WARNING);
            $noOfUnits = $this->maxSpeed - $this->currentSpeed;
        }

        $this->currentSpeed += $noOfUnits;
    }

    final public function brake($noOfUnits = 0)
    {
        if ($noOfUnits < 0) {
            throw new \Exception('Breaking can not be negative');
        }

        if ($noOfUnits > $this->currentSpeed) {
            trigger_error('Breaking down to 0', E_USER_WARNING);
            $noOfUnits = $this->currentSpeed;
        }

        $this->currentSpeed -= $noOfUnits;
    }

    final public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    final public function getVehicleData()
    {
        $data = array(
            'make' => $this->make,
            'model' => $this->model,
            'color' => $this->color,
            'buildDate' => $this->buildDate
        );

        return $data;
    }
}
