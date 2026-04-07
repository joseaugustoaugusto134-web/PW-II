<?php

namespace source\Models\Banking;

class Transaction
{
    private ?string $type;
    private ?float $amount;
    private ?string $description;
    private ?string $createdAt;

    public function __construct($type = null, $amount = null, $description = null, $createdAt = null)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->description = $description;
        $this->createdAt = date('Y-m-d h:i:s');
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
   
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function show(): void
    {
        echo "{$this->createdAt} {$this->type} | Valor: {$this->amount} | Descrição: {$this->description}";
    }


}