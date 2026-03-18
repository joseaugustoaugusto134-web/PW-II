<?php

namespace source\Models\Faq;

class Type {

private $id;
private $name;

public function __construct(int $id = null, string $name = null) {
$this->id = $id;
$this->name = $name;
}

public function getId(): int{
return $this->id;
}

public function setId(int $id) {
$this->id = $id;
}

public function getName(): string{
return $this->name;
}

public function setName(string $name) {
$this->name = $name;
}

public function show(): void{
echo "Categoria: {$this->id} - Nome: {$this->name}";
}
}

