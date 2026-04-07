<?php

namespace source\Models\Banking;

class BankAccount 
{
    private ?int $id;
    private ?string $ownerName;
    private ?string $accountNumber;
    private ?float  $balance;
    private ?string $pin;
    private $transactions = [];

    public function __construct($id = null, $ownerName = null, $accountNumber = null, $balance = null, $pin = null)
    {
        $this->id = $id;
        $this->ownerName = $ownerName;
        $this->accountNumber = $accountNumber;
        $this->balance = 0.0;
        $this->pin = md5($pin);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }

    public function setOwnerName($ownerName): void
    {
        $this->ownerName = $ownerName;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    public function getBalance(): ?float
    {
        return $this->balance;
    }

    public function validatePin(string $pin): bool
    {
        if($this->pin === md5($pin))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function changePin(string $currentPin, string $newPin): bool
    {
        if($this->validatePin($currentPin))
        {
            $this->pin = md5($newPin);
            return true;
        }
        else
        {
            return false;
        } 
    }

    public function deposit(float $amount, string $description = 'Depósito'): bool
    {
        if($amount > 0)
        {
            $this->balance += $amount;
            $this->transactions[] = $description;
            return true;
        }
        else
        {
            return false;
        }
    }

    public function withdraw(float $amount, string $pin, string $description = 'Saldo'): bool
    {
        if($this->validatePin($pin) && $amount > 0 && $amount < $this->balance)
        {
            $this->balance -= $amount;
            $transactions[] = $description;
            return true;    
        }
        else
        {
            return false;
        }
    }

    public function getTransactions(): array
    {
        return $this->transactions;
    }

    public function show(): void
    {
        echo "Conta Bancária: {$this->id}<br>
              Titular: {$this->ownerName}<br>
              Número da Conta: {$this->accountNumber}<br>
              Saldo: {$this->balance}<br>
              Transações Registradas:  " . count($this->transactions);
    }
}