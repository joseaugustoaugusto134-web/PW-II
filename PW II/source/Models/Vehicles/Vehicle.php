<?php

namespace source\Models\Vehicles;

class Vehicle
{
    private ?string $chassisCode;
    private ?string $brand;
    private ?string $model;
    private ?int $year;
    private ?float $basePrice;
    private ?Owner $owner;

    public function __construct(?string $chassisCode = null, ?string $brand = null, ?string $model = null, ?int $year = null, ?float $basePrice = null, ?Owner $owner = null)
    {
        $this->chassisCode = $chassisCode;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->basePrice = $basePrice;
        $this->owner = $owner;
    }

    public function getChassisCode(): ?string
    {
        return $this->chassisCode;
    }

    public function setChassisCode(?string $chassisCode): void
    {
        $this->chassisCode = $chassisCode;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): void
    {
        $this->year = $year;
    }

    public function getBasePrice(): ?float
    {
        return $this->basePrice;
    }

    public function setBasePrice(?float $basePrice): void
    {
        $this->basePrice = $basePrice;
    }

    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    public function setOwner(?int $owner): void
    {
        $this->owner = $owner;
    }

    public function calculateTax(): float
    {
        return 0;
    }

    public function show(): void
    {
        echo "Veículo: {$this->brand} - {$this->model} ({$this->year})<br>";
        echo "Código de Chassi: {$this->chassisCode}<br>";
        echo "Valor Base: " . number_format($this->basePrice, 2, ",", ".") . "<br>";
        echo "Proprietário: {$this->owner->getName()}";
    }


}