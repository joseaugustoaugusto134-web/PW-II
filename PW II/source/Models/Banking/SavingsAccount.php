<?php

namespace source\Models\Banking;
use source\Models\Banking\BankAccount;

class SavingsAccount extends BankAccount
{
    private ?float $yieldRate;
    private ?string $lastYieldDate;
    private ?float $yield;

    public function __construct($id, $ownerName, $accountNumber, $balance, $pin, $yieldRate = null, $lastYieldDate = null)
    {
        parent::__construct($id, $ownerName, $accountNumber, $balance, $pin);
        $this->yieldRate = $yieldRate;
        $this->lastYieldDate = date('Y-m-d h:i:s');
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

    public function setLastYieldDate(): void
    {
        $this->lastYieldDate = $lastYieldDate;
    }

    public function applyYield(float $yield): float
    {
        $this->yield = ($this->getBalance() * $this->yieldRate) / 100;
        parent::deposit(100);
        $this->lastYieldDate = date('Y-m-d h:i:s');
        return $this->yield;
    }

    public function show(): void
    {
        parent::show();
        echo "Taxa de Rendimento: {$this->yieldRate}<br>
              Último rendimento: {$this->lastYieldDate}";
    }


}