<?php

namespace source\Models\Game;

use source\Models\Game\Character;

class Warrior extends Character
{
    private $defense;

    public function __construct(int $defense = null, string $name = null, int $life = null, int $mana = null, int $strength = null) 
    {
        parent::__construct($name, $life, $mana, $strength);
        $this->defense = $defense;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): void
    {
        $this->defense = $defense;
    }

   
    public function describe()
    {
        echo "Nome do Personagem: {$this->getName()}<br>";
        echo "Vida: {$this->getLife()}<br>";
        echo "Mana: {$this->getMana()}<br>";
        echo "Força: {$this->getStrength()}<br>";
        echo "Inteligência: {$this->defense}<br>";
    }
}