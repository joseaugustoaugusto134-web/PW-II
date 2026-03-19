<?php

namespace source\Models\Math;

class PythagoreanTheorem
{
    private $cathetusA;
    private $cathetusB;
    private $hypotenuse;

    public function __construct(float $cathetusA = null, float $cathetusB = null)
    {
        $this->cathetusA = $cathetusA;
        $this->cathetusB = $cathetusB;      
    }

    public function getCathetusA(): ?float
    {
        return $this->cathetusA;
    }

    public function setCathetusA(float $cathetusA): void
    {
        $this->cathetusA = $cathetusA;
    }

    public function getCathetusB(): ?float
    {
        return $this->cathetusB;
    }

    public function setCathetusB(float $cathetusB): void
    {
        $this->cathetusB = $cathetusB;
    }

    public function getHypothenuse(): ?float
    {
        return $this->hypothenuse;
    }

    public function setHypothenuse(float $hypotenuse): void
    {
        $this->hypothnuse = $hypotenuse;
    }

    public function calculate() : void
    {
        $this->hypotenuse = pow($this->cathetusA, 2) + pow($this->cathetusB, 2);
        $this->hypotenuse = sqrt($this->hypotenuse);
    }

    public function show() : void
    {
        echo "Teorema de Pitágoras (c² = a² + b²)<br>";
        echo "Cateto a: {$this->cathetusA}<br>";
        echo "Cateto b: {$this->cathetusB}<br>";
        echo "Hipotenusa: {$this->hypotenuse}";
    }
}