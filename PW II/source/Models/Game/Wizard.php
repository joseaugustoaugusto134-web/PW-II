<?php

namespace source\Models\Game;

use source\Models\Game\Character;

class Wizard extends Character
{
    private $intelligence;

    public function __construct(int $intelligence = null, string $name = null, int $life = null, int $mana = null, int $strength = null) 
    {
        parent::__construct($name, $life, $mana, $strength);
        $this->intelligence = $intelligence;
    }

    public function getIntelligence(): ?int
    {
        return $this->intelligence;
    }

    public function setIntelligence(int $intelligence): void
    {
        $this->intelligence = $intelligence;
    }

   
    public function describe()
    {
        echo "Nome do Personagem: {$this->getName()}<br>";
        echo "Vida: {$this->getLife()}<br>";
        echo "Mana: {$this->getMana()}<br>";
        echo "Força: {$this->getStrength()}<br>";
        echo "Inteligência: {$this->intelligence}<br>";
    }
}