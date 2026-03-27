<?php

namespace source\Models\Vehicles;
use source\Models\Vehicles\Vehicle;

class Car extends Vehicle
{
    private ?int $doors;
    private ?string $fuelType;

    public function __construct($owner, $chassisCode, $brand, $model, $year, $basePrice, ?int $doors = null, ?string $fuelType = null)
    {
        parent::__construct($chassisCode, $brand, $model, $year, $basePrice, $owner);
        $this->doors = $doors;
        $this->fuelType = $fuelType; 
    }

    public function getDoors(): ?int
    {
        return $this->doors;
    }

    public function setDoors(?int $doors): void
    {
        $this->doors = $doors;
    }

    public function getFuelType(): ?string
    {
        return $this->fuelType;
    }

    public function setFuelType(?string $fuelType): void
    {
        $this->fuelType = $fuelType;
    }

    public function calculateTax(): float
    {
       return ($this->getBasePrice()) * (15/100);
    }

    public function show(): void
    {
        echo parent::show() . "<br>";
        echo "Portas: {$this->doors}<br>";
        echo "Combustível: {$this->fuelType}<br>";
        echo "Imposto (15%): {$this->calculateTax()}<br>";
    }
}