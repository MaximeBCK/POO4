<?php


abstract class HighWay
{
    private array $currentVehicles;

    private int $nbLane;

    private int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function getNbLane(): int
    {
        return $this->nbLane;
    }
    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    abstract public function addVehicles(object $vehicle);
}