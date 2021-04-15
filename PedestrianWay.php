<?php


final class PedestrianWay extends HighWay
{
    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }
    public function addVehicles(object $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof skateboard){
            $this->currentVehicles[]= $vehicle;
        }
    }
}