<?php

namespace source\Models\Payment;
use source\Models\Payment\Payment;

class PixPayment extends Payment
{
    private ?string $pixKey;
    private ?string $pixKeyType;

    public function __construct($id = null, $amount = null, $status = null, $description = null, $createdAt = null, $pixKey = null, $pixKeyType = null)
    {
        parent::__construct($id, $amount, $status, $description, $createdAt);
        $this->pixKey = $pixKey;
        $this->pixKeyType = $pixKeyType;
    }

    public function getPixKey(): ?string
    {
        return $this->pixKey;
    }

    public function setPixKey($pixKey): void
    {
        $this->pixKey = $pixKey;
    }

    public function getPixKeyType(): ?string
    {
        return $this->pixKeyType;
    }

    public function setPixKeyType($pixKeyType): void
    {
        $this->pixKeyType = $pixKeyType;
    }

    public function calculateFee(): float
    {
        return parent::calculateFee();
    }

    public function process(): string
    {
        $this->setStatus("aprovado");
        return "Pix aprovado instantaneamente! Chave: {$this->pixKey}";
    }

    public function show(): string
    {
        return "Chave: {$this->pixKey}, Tipo da Chave: {$this->pixKeyType}<br>
                Status: {$this->getStatus()}<br>
                Valor total: {$this->getAmount()}<br>
                Taxa: {$this->calculateFee()}<br>";
    }




}