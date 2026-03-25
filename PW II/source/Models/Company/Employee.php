<?php

namespace source\Models\Company;
use source\Models\User;


class Employee extends User
{
    private $hoursWorked;
    private $hourValue;
    private $salary;

    public function __construct(float $hoursWorked = null, float $hourValue = null, float $salary=null, string $name = null, string $email = null, int $id = null)
    {
        parent::__construct($name, $email, $id);
        $this->hoursWorked = $hoursWorked;
        $this->hourValue = $hourValue;
        $this->salary = $salary;
    }

    public function getHoursWorked() :?float
    {
        return $this->hoursWorked;
    }

    public function setHoursWorked(float $hoursWorked = null): void
    {
        $this->hoursWorked = $hoursWorked;
    }

    public function getHourValue() :?float
    {
        return $this->hourValue;
    }

    public function setHourValue(float $hourValue = null): void
    {
        $this->hourValue = $hourValue;
    }

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(float $salary = null): void
    {
        $this->salary = $salary;
    }

    public function calculateSalary(): float
    {
        return $this->salary = $this->hoursWorked * $this->hourValue;
    }

    public function show(): void
    {
        echo "Funcionário: {$this->getId()} - Nome: {$this->getName()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Horas Trabalhadas: {$this->hoursWorked}<br>";
        echo "Valor da Hora: {$this->hourValue}<br>";
        echo "Salário: {$this->salary}<br>";
    }
    
}