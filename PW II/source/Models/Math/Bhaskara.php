<?php

namespace source\Models\Math;

class Bhaskara
{
    private $a;
    private $b;
    private $c;
    private $discriminant;
    private $root1;
    private $root2;

    public function __construct(float $a = null, float $b = null, float $c = null)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA(): ?float
    {
        return $this->a;
    }

    public function setA(float $a): void
    {
        $this->a = $a;
    }

    public function getB(): ?float
    {
        return $this->B;
    }

    public function setB(float $b): void
    {
        $this->b = $b;
    }

    public function getC(): ?float
    {
        return $this->c;
    }

    public function setC(float $c): void
    {
        $this->c = $c;
    }

    public function getDiscriminant(): ?float
    {
        return $this->discriminant;
    }

    public function setDiscriminant(float $Discriminant): void
    {
        $this->discriminant = $Discriminant;
    }

    public function getRoot1(): ?float
    {
        return $this->root1;
    }

    public function setRoot1(float $root1): void
    {
        $this->root1 = $root1;
    }

    public function getRoot2(): ?float
    {
        return $this->root2;
    }

    public function setRoot2(float $root2): void
    {
        $this->root2 = $root2;
    }

    public function calculate() 
    {
        $this->discriminant = pow($this->b, 2) - 4 * $this->a * $this->c;
        
        if($this->discriminant < 0)
            {
                $this->root1 = null;
                $this->root2 = null;
            }
        else if($this->discriminant==0)
            {
                $this->root1 = (-$this->b + sqrt($this->discriminant));
                $this->root2 = $this->root1;
            }
        else if($this->discriminant>0)
            {
                $this->root1 = (-$this->b + sqrt($this->discriminant)) /2 * $this->a;
                $this->root2 = (-$this->b + sqrt($this->discriminant)) /2 * $this->a;
            }
    }

    public function show()
    {
        echo "Fórmula de Báskara (Bhaskara's Formula)<br>";
        echo "Coeficiente a (Coefficient a): {$this->a}<br>";
        echo "Coeficiente b (Coefficient b): {$this->b}<br>";
        echo "Coeficiente c (Coefficient c): {$this->c}<br>";
    }
}