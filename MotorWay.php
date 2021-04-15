<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane , $maxSpeed);
    }

    public function addVehicles(object $vehicle)
    {
        if($vehicle instanceof Car || $vehicle instanceof camion){
            $this->currentVehicles[]= $vehicle;
        }
    }
}