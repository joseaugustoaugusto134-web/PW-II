<?php

namespace source\Models\Vehicles;
use source\Models\Vehicles\Vehicle;

class Car extends Vehicle
{
    private ?int $doors;
    private ?string $fuelType;

    public function __construct(?int $doors = null, ?string $fuelType = null, $chassisCode, $brand, $model, $year, $basePrice, $owner)
    {
        parent::construct($chassisCode, $brand, $model, $year, $basePrice, $owner);
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
        echo "Carro: {$this->getBrand()} - {$this->getModel()} ({$this->getYear()})";
        echo "Código de Chassi: {$this->getChassisCode()}";
        echo "Valor Base: {$this->getBasePrice()}";
        echo "Portas: {$this->doors}";
        echo "Combustível: {$this->fuelType}";
        echo "Imposto: {$this->calculateTax()}";
        echo "Proprietário: {$this->getName()}";
    }
}