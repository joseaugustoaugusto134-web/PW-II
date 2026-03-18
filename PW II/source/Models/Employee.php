<?php

namespace source\Models;

class Employee {

private $id;
private $name;
private $salary;

public function __construct(int $id = null, string $name = null, float $salary = null) {
$this->id = $id;
$this->name = $name;
$this->salary = $salary;
}

public function getId(): ?int {
return $this->id;
}

public function setId(int $id): void {
$this->id = $id;
}

public function getName(): ?string {
return $this->name;
}

public function setName(string $name): void {
$this->name = $name;
}

public function getTotal(): ?int {
return $this->salary;
}

public function setTotal(float $salary): void {
$this->salary = $salary;
}

public function raise(float $raise = null): void{
$this->salary += $this->salary *($raise/100);
}

public function show(): void {
echo "
" . "Funcionário: {$this->id} - Nome: {$this->name} - Salário: R$ " . number_format($this->salary, 2, ",", ".");
}
}