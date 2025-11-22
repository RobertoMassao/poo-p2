<?php

namespace App;

class Inventory
{
    private int $maxCapacity;
    /**@var Item[] */
    private array $itens;

    public function __construct()
    {
        $this->setMaxCapacity();
        $this->itens = [];
    }

    public function getMaxCapacity(): int
    {
        return $this->maxCapacity;
    }

    public function setMaxCapacity(): void{
        $extraCapacity = Player->getLevel() * 3;
        $this->maxCapacity = 20  + $extraCapacity  
    }
}
