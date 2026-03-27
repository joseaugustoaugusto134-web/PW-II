<?php

namespace source\Models\Vehicles;
use source\Models\Vehicles\Vehicle;

class Motorcycle extends Vehicle
{
    private ?int $displacement;

    public function __construct($chassisCode, $brand, $model, $year, $basePrice, $owner,?int $displacement = null)
    {
        parent::__construct($chassisCode, $brand, $model, $year, $basePrice, $owner);
        $this->displacement = $displacement;
    }

    public function getDisplacement(): ?int
    {
        return $this->displacement;
    }

    public function setDisplacement($displacement): void
    {
        $this->displacement = $displacement;
    }

    public function calculateTax(): float
    {
        return ($this->getBasePrice()) * (5/100);
    }

    public function show(): void
    {
        echo parent::show() . "<br>
        Cilindradas: {$this->displacement}CC<br>
        Imposto (5%): {$this->calculateTax()}<br>
        Proprietário: {$this->getOwner()->getName()}<br>
        ";
        
    }

}
