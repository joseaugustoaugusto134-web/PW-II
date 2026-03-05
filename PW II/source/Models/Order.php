<?php

namespace source\Models;

class Order
{
    private $id;
    private $customerName;
    private $total;

    public function __construct(int $id = null, string $customerName = null, float $total = null)
    {
        $this->id = $id;
        $this->customerName = $customerName;
        $this->total = $total;
    }

    public function getId() : ?int
    {
        return $this->id;
    }
    public function setId(int $id = null) : void
    {
        $this->id = $id;
    }

    public function getCustomerName() : ?string
    {
        return $this->customerName;
    }
    public function setCustomerName(string $customerName = null) : void
    {
        $this->customerName = $customerName;
    }

    public function getTotal() : ?float
    {
        return $this->total;
    }
    public function setTotal(float $total = null) : void
    {
        $this->total = $total;
    }

    public function addFee(int $acrescimo = null) : void
    {
        $this->total += $this->total * ($acrescimo/100);
    }

    public function show()
    {
        echo "Pedido: {$this->id} - Cliente: {$this->customerName} - Total: {$this->total}";
    }
}