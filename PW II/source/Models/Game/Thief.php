<?php

namespace source\Models\Game;

use source\Models\Game\Character;

class Thief extends Character
{
    private $agility;

    public function __construct(int $agility = null, string $name = null, int $life = null, int $mana = null, int $strength = null) 
    {
        parent::__construct($name, $life, $mana, $strength);
        $this->agility = $agility;
    }

    public function getAgility(): ?int
    {
        return $this->agility;
    }

    public function setAgility(int $agility): void
    {
        $this->agility = $agility;
    }

   
    public function describe()
    {
        echo "Nome do Personagem: {$this->getName()}<br>";
        echo "Vida: {$this->getLife()}<br>";
        echo "Mana: {$this->getMana()}<br>";
        echo "Força: {$this->getStrength()}<br>";
        echo "Inteligência: {$this->agility}<br>";
    }
}