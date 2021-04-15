<?php

require_once 'vehicule.php';

class camion extends vehicule
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private int $stock;

    private int $load = 0;

    protected string $energy;

    public function __construct(string $color, int $nbSeats,int $stock, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->stock = $stock;
        $this->setEnergy($energy);
    }
    public function getLoad(): int
    {
        return $this->load;
    }
    public function setLoad(int $load)
    {
        $this->load = $load;
    }
    public function getStock(): int
    {
        return $this->stock;
    }
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Camion
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function fillLoad()
    {
        if ($this->getStock() <= $this->load) {
            return 'Full';
        }
        else {
            return 'In filling';
        }


    }

}