<?php

namespace source\Models\Company;
use source\Models\Company\Employee;

class Manager extends Employee
{
    private $bonus;

    public function __construct(float $bonus = null, float $hoursWorked = null, float $hourValue = null, float $salary=null, string $name = null, string $email = null, int $id = null)
    {
        parent::__construct($hoursWorked, $hourValue, $salary, $name, $email, $id);
        $this->bonus = $bonus;
    }

    public function getBonus(): ?float
    {
        return $this->bonus = $bonus;
    }

    public function setBonus(): void
    {
        $this->bonus = $bonus;
    }

    public function calculateSalary(): float
    {
        return ($this->getSalary()) + ($this->bonus);
    }

    public function show(): void
    {
        echo "Gerente: {$this->getId()} - Nome: {$this->getName()}<br>";
        echo "Email: {$this->getName()}<br>";
        echo "Horas Trabalhadas: {$this->getHoursWorked()}<br>";
        echo "Valor da Hora: {$this->getHourValue()}<br>";
        echo "Salário Base: {$this->getSalary()}<br>";
        echo "Bonus Fixo: {$this->bonus}<br>";
        echo "Salário Total: {$this->calculateSalary()}<br>";
    }
}