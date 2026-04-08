<?php

namespace source\Models\Banking;
use source\Models\Banking\BankAccount;

class SavingsAccount extends BankAccount
{
    private ?float $yieldRate;
    private ?string $lastYieldDate;

    public function __construct($id, $ownerName, $accountNumber, $balance, $pin, $yieldRate = null, $lastYieldDate = null)
    {
        parent::__construct($id, $ownerName, $accountNumber, $pin);
        $this->yieldRate = $yieldRate;
        $this->lastYieldDate = date('Y-m-d');
    }

    public function getYieldRate(): ?float
    {
        return $this->yieldRate;
    }

    public function setYieldRate($yieldRate): void
    {
        $this->yieldRate = $yieldRate;
    }

    public function getLastYieldDate(): ?string
    {
        return $this->lastYieldDate;
    }

    public function setLastYieldDate($lastYieldDate): void
    {
        $this->lastYieldDate = $lastYieldDate;
    }

    public function applyYield(): float
    {
    $yield = ($this->getBalance() * $this->yieldRate) / 100;

    parent::deposit($yield, 'Rendimento');

    $this->lastYieldDate = date('Y-m-d');

    return $yield;
    }

    public function show(): void
    {
        parent::show();
        echo "Taxa de Rendimento: {$this->yieldRate}<br>
              Último rendimento: {$this->lastYieldDate}";
    }


}
