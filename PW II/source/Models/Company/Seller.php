<?php

namespace source\Models\Company;
use source\Models\Company\Employee;

class Seller extends Employee
{
    private $totalSales;


    public function __construct(float $totalSales = null, float $hoursWorked = null, float $hourValue = null, float $salary=null, string $name = null, string $email = null, int $id = null)
    {
        parent::__construct($hoursWorked, $hourValue, $salary, $name, $email, $id);
        $this->totalSales = $totalSales;
    }

    public function getTotalSales(): ?float
    {
        return $this->totalSales;
    }

    public function setTotalSales(float $totalSales): void
    {
        $this->totalSales = $totalSales;
    }

    public function calculateCommission(): float
    {
        return $this->totalSales * (10/100);
    }

    public function calculateSalary(): float
    {
        $baseSalary = parent::calculateSalary();
        return ($baseSalary) + ($this->calculateCommission());
    }

    public function show(): void
    {
        echo "Vendedor: {$this->getId()} - Nome: {$this->getName()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Horas Trabalhadas: {$this->getHoursWorked()}<br>";
        echo "Valor da Hora: {$this->getHourValue()}<br>";
        echo "Salário Base: {$this->getSalary()}<br>";
        echo "Total de Vendas: {$this->totalSales}<br>";
        echo "Comissão: {$this->calculateCommission()}<br>";
        echo "Salário Total: {$this->calculateSalary()}<br>";
    }
}
