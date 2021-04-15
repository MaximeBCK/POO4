<?php

require_once 'vehicule.php';

class Car extends vehicule
{
    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }

    public function getParkBrake(): string
    {
    return $this->hasParkBrake;
    }


    public function start()
    {
        if($this->getParkBrake()==true) {
            throw new Exception ('bloque');
        }
        return 'à fond les ballons Jacky';
    }

    /*
    public function start()
    {
        if($this->getParkBrake() == false) {
            throw new Exception("Frain a main activée");
        }
        return "let's go";
    }
     */
}