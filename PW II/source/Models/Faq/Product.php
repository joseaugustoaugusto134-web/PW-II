<?php

namespace source\Models;

class Product
{
    private $id;
    private $name;
    private $price;
    public function __construct(int $id = null, string $name = null, float $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId() : ?int
    {
        return $this->id;
    }
    public function setId(int $id = null) : void 
    {
        $this->id = $id;
    }

    public function getName() : ?string
    {
        return $this->name;
    }
    public function setName(int $name = null) : void 
    {
        $this->name = $name;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }
    public function setPrice(int $price = null) : void 
    {
        $this->price = $price;
    }

    public function discount(int $discount = null) : void
    {
        $this->price -= $this->price * ($discount/100);
    }

    public function show()
    {
        echo "Nome: {$this->name}<br>";
        echo "Id: {$this->id}<br>";
        echo "Preço: £{$this->price}<br>";
    }

}