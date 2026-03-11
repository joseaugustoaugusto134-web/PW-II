<?php

namespace source\Models\Faq;

class Employee{

    private $id;
    private $name;
    private $salary;

     public function __construct(int $id = null, string $name = null, float $salary = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->salary = $salary;
    }

       public function getId() : ?int
    {
        return $this->id;
    }
    public function setId(int $id = null) : void
    {
        $this->id = $id;
    }

       public function getName() : ?string
    {
        return $this->name;
    }
    public function setName(string $name = null) : void
    {
        $this->name = $name;
    }

       public function getSalary() : ?float
    {
        return $this->salary;
    }
    public function setSalary(float $salary = null) : void
    {
        $this->salary = $salary;
    }

    public function raise(int $reajuste = null) : void
    {
        $this->salary += $this->salary * ($reajuste/100); 
    }

    public function show(){
        echo "Funcionario: {$this->id} - Nome: {$this->name} - Salário: R$ " . number_format($this->salary, 2, ",", ".");
    }
}