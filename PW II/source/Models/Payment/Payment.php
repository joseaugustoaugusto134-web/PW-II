<?php

namespace source\Models\Payment;

class Payment
{
    private ?int $id;
    private ?float $amount;
    private ?string $status;
    private ?string $description;
    private ?string $createdAt;

    public function __construct($id = null, $amount = null, $status = null, $description = null, $createdAt = null)
    {
        $this->id = $id;
        $this->amount = $amount;
        $this->status = "pendente";
        $this->description = $description;
        $this->createdAt = date('Y-m-d h:i:s');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function calculateFee(): float
    {
        return 0.0;
    }

    public function process(): string
    {
        $this->status = "aprovado";
        return "Pagamento {$this->id} processado com sucesso";
    }

    public function show(): string
    {
        return "Pagamento: {$this->id}<br>
                Descrição: {$this->description}<br>
                Valor: {$this->amount}<br>
                Taxa: {$this->calculateFee()}<br>
                Valor Total: {$this->amount}<br>
                Status: {$this->status}";
    }


}