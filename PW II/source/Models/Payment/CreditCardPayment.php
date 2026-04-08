<?php

namespace source\Models\Payment;
use source\Models\Payment\Payment;

class CreditCardPayment extends Payment
{
    private ?string $cardLastDigits;
    private ?int $installments;
    private ?float $feeRate;

    public function __construct($id = null, $amount = null, $status = null, $description = null, $createdAt = null, $cardLastDigits = null, $installments = null, $feeRate = null)
    {
        parent::__construct($id, $amount, $status, $description, $createdAt);
        $this->cardLastDigits = $cardLastDigits;
        $this->installments = $installments;
        $this->feeRate = $feeRate;
    }

    public function getCardLastDigits(): ?string
    {
        return $this->cardLastDigits;
    }

    public function setCardLastDigits($cardLastDigits): void
    {
        $this->cardLastDigits = $cardLastDigits;
    }

    public function getInstallments(): ?int
    {
        return $this->installments;
    }

    public function setInstallments($installments): void
    {
        $this->installments = $installments;
    }

    public function getFeeRate(): ?float
    {
        return $this->feeRate;
    }

    public function setFeeRate($feeRate): void
    {
        $this->feeRate = $feeRate;
    }

    public function calculateFee(): float
    {
        return ($this->getAmount() * $this->feeRate)/100;
    }

    public function process(): string
    {
        $this->setStatus("aprovado");
        return "Cartão **** {$this->cardLastDigits} {$this->getStatus()} | {$this->installments}x de R$ {$this->calculateFee()}";
    }

    public function show(): string
    {
        return "Taxa Percentual: {$this->feeRate}%<br>
                Parcelas: {$this->installments}<br>
                Status: {$this->getStatus()}";
    }
}