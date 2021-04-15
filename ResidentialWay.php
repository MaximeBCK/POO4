<?php


final class ResidentialWay extends HighWay
{
    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicles(object $vehicle)
    {
        if($vehicle instanceof vehicule){
            $this->currentVehicles[]= $vehicle;
        }
    }
}