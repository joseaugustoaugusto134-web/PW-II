<?php

namespace source\Models\Payment;
use source\Models\Payment\Payment;

class BoletoPayment extends Payment
{
    private ?string $barCode;
    private ?string $dueDate;
    private ?float $issuanceFee;

    public function __construct($id = null, $amount = null, $status = null, $description = null, $createdAt = null, $barCode = null, $dueDate = null, $issuanceFee = null)
    {
        parent::__construct($id, $amount, $status, $description, $createdAt);
        $this->barCode = $barCode;
        $this->dueDate = $dueDate;
        $this->issuanceFee = $issuanceFee;
    }

    public function getBarCode(): ?string
    {
        return $this->barCode;
    }

    public function setBarCode($barCode): void
    {
        $this->barCode = $barCode;
    }

    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    public function setDueDate($dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    public function getIssuanceFee(): ?float
    {
        return $this->issuanceFee;
    }

    public function setIssuanceFee($issuanceFee): void
    {
        $this->issuanceFee = $issuanceFee;
    }

    public function calculateFee(): float
    {
        return $this->issuanceFee;
    }

    public function process(): string
    {
        $this->setStatus("pendente");
        return "Boleto gerado! Vencimento: {$this->dueDate} | Valor Total: R$ {$this->getAmount()}";
    }
    
    public function show(): string
    {
        return "Código de Barras: {$this->barCode}<br>
                Date de Vencimento: {$this->dueDate}<br>
                Descrição: {$this->getDescription()}<br>
                Valor total: R$ {$this->getAmount()}<br>
                Taxa: R$ {$this->calculateFee()}<br>
                Data de Criação: {$this->getCreatedAt()}<br>
                Prazo de compensação de até 3 dias úteis";
    }
}